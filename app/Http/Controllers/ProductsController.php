<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductColor;
use App\ProductEquip;
use App\ProductInk;
use App\Category;
use App\Color;
use Auth;
use Image;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(30);

        $products->setPath('products');

        return view('catalogs.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $withoutCategory = Category::where('id', 1)->get();
        $withoutMainCategories = Category::where('parent_id', '<>', 0)->get();
        $categories = $withoutCategory->merge($withoutMainCategories);

        return view('catalogs.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = \Validator::make($request->all(), [
            'name'        => 'required',
            'sku'         => 'required',
            'image'       => 'sometimes|image|max:3000',
            'colors'      => 'required_if:checkColors,on',
            'inks'        => 'required_if:checkInks,on',
            'equipments'  => 'required_if:checkEquipment,on',
            'parent_id'   => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Products::create')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $image_name = "image" . str_random(16) . "." . $ext;

            Image::make($img)->fit(300, 300)->save($this->admin_content_path() . $this->products_path . $image_name, 100);
            Image::make($img)->fit(300, 300)->save($this->app_content_path() . $this->products_path . $image_name, 100);
        }

        $product = Product::create([
            'name'        => $request->input('name'),
            'image'       => ($request->hasFile('image')) ? $image_name : null,
            'sku'         => $request->input('sku'),
            'stock'       => ($request->has('inStock')) ? 1 : 0,
            'parent_id'   => $request->input('parent_id'),
            'colors'      => ($request->has('checkColors')) ? 1 : 0,
            'ink'         => ($request->has('checkInks')) ? 1 : 0,
            'equipment'   => ($request->has('checkEquipment')) ? 1 : 0,
            'description' => (empty(strip_tags($request->input('description')))) ? null : $request->input('description'),
            'user_id'     => Auth::id()
        ]);

        $tree = $this->tree($product, 'desc');

        $product->category_id = (count($tree) > 1) ? $tree[1]['id'] : $tree[0]['id'];

        $product->save();

        if ($product->colors) {
            ProductColor::create(['product_id' => $product->id, 'colors_ar' => $request->input('colors')]);
        }
        if ($product->ink) {
            ProductInk::create(['product_id' => $product->id, 'inks_ar' => $request->input('inks')]);
        }
        if ($product->equipment) {
            ProductEquip::create(['product_id' => $product->id, 'equip_ar' => $request->input('equipments')]);
        }

        $link = $this->link_generator(route('Products::show' , $product->id), $product->name);

        return redirect()->route('Products::create')->with('status', '¡El producto se ha creado exitosamente, para verlo, ir a: ' . $link . '!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::findOrFail($id);

        if($product->colors) {
          $product->colorResources = $this->getColorsOfProduct($product->getColors->colors_ar);
        }

        return view('catalogs.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);

        $withoutCategory = Category::where('id', 1)->get();
        $withoutMainCategories = Category::where('parent_id', '<>', 0)->get();
        $categories = $withoutCategory->merge($withoutMainCategories);

        return view('catalogs.products.edit')->with('product', $product)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = \Validator::make($request->all(), [
            'name'        => 'required',
            'sku'         => 'required',
            'image'       => 'sometimes|image|max:3000',
            'colors'      => 'required_if:checkColors,on',
            'inks'        => 'required_if:checkInks,on',
            'equipments'  => 'required_if:checkEquipment,on',
            'parent_id'   => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Products::edit', $id)
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        $product = Product::findOrFail($id);

        $product->update([
            'name'        => $request->input('name'),
            'sku'         => $request->input('sku'),
            'stock'       => ($request->has('inStock')) ? 1 : 0,
            'parent_id'   => $request->input('parent_id'),
            'colors'      => ($request->has('checkColors')) ? 1 : 0,
            'ink'         => ($request->has('checkInks')) ? 1 : 0,
            'equipment'   => ($request->has('checkEquipment')) ? 1 : 0,
            'description' => (empty(strip_tags($request->input('description')))) ? null : $request->input('description'),
            'user_id'     => Auth::id()
        ]);

        if ($request->hasFile('image')) {

          if (File::exists($this->admin_content_path() . $this->products_path . $product->image) && File::exists($this->app_content_path() . $this->products_path . $product->image)) {
              File::delete($this->admin_content_path() . $this->products_path . $product->image);
              File::delete($this->app_content_path() . $this->products_path . $product->image);
          }

          $img = $request->file('image');
          $ext = $img->getClientOriginalExtension();
          $image_name = "image" . str_random(16) . "." . $ext;

          $product->image = $image_name;

          Image::make($img)->fit(300, 300)->save($this->admin_content_path() . $this->products_path . $image_name, 100);
          Image::make($img)->fit(300, 300)->save($this->app_content_path() . $this->products_path . $image_name, 100);
        }

        $tree = $this->tree($product, 'desc');

        $product->category_id = (count($tree) > 1) ? $tree[1]['id'] : $tree[0]['id'];

        $product->save();

        if ($product->colors) {

            $check = ProductColor::where('product_id', $id)->get();

            if(count($check) > 0) {
              ProductColor::where('product_id', $id)->update(['colors_ar' => $request->input('colors')]);
            } else {
              ProductColor::create(['product_id' => $product->id, 'colors_ar' => $request->input('colors')]);
            }
        }
        if ($product->ink) {

            $check = ProductInk::where('product_id', $id)->get();

            if(count($check) > 0) {
              ProductInk::where('product_id', $id)->update(['inks_ar' => $request->input('inks')]);
            } else {
              ProductInk::create(['product_id' => $product->id, 'inks_ar' => $request->input('inks')]);
            }

        }
        if ($product->equipment) {

            $check = ProductEquip::where('product_id', $id)->get();

            if(count($check) > 0) {
              ProductEquip::where('product_id', $id)->update(['equip_ar' => $request->input('equipments')]);
            } else {
              ProductEquip::create(['product_id' => $product->id, 'equip_ar' => $request->input('equipments')]);
            }
        }

        return redirect()->route('Products::edit', $id)->with('status', '¡El producto se ha actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);

        if (File::exists($this->admin_content_path() . $this->products_path . $product->image) && File::exists($this->app_content_path() . $this->products_path . $product->image)) {
            File::delete($this->admin_content_path() . $this->products_path . $product->image);
            File::delete($this->app_content_path() . $this->products_path . $product->image);
        }

        $product->delete();

        return redirect()->route('Products::index')->with('status', 'Producto eliminado correctamente');
    }

}

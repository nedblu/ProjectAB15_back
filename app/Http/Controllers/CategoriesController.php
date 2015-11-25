<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Auth;
use Image;
use File;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        
        return view('catalogs.categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $limit = Category::count() - 1;

        $categories = Category::skip(1)->take($limit)->get();

        return view('catalogs.categories.create')->with('categories', $categories);
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
            'slug'        => 'required',
            'description' => 'required',
            'image'       => 'image|max:3000',
            'parent'      => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Categories::create')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        if ($request->hasFile('image')) {

            $img = $request->file('image');

            $ext = $img->getClientOriginalExtension();

            $image_name = "category_" . str_random(16) . "." . $ext;

            $category = Category::create([
                'name'        => $request->input('name'),
                'description' => $request->input('description'),
                'slug'        => str_slug($request->input('slug')),
                'image'       => $image_name,
                'user_id'     => Auth::id(),
                'parent_id'   => $request->input('parent')
            ]);

            Image::make($img)->fit(200, 200)->save($this->admin_content_path() . $this->category_path . $image_name, 100);
            Image::make($img)->fit(200, 200)->save($this->app_content_path() . $this->category_path . $image_name, 100);

        } else {

            $category = Category::create([
                'name'        => $request->input('name'),
                'description' => $request->input('description'),
                'slug'        => $request->input('slug'),
                'user_id'     => Auth::id(),
                'parent_id'   => $request->input('parent')
            ]);

        }

        return redirect()->route('Categories::create')->with('status', '¡La categoría se ha creado exitosamente!');

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
        $category = Category::findOrFail($id);

        if($category->parent_id > 0) {
            $parent = Category::find($category->parent_id);
            $category->parent = $parent->name;
        }
        
        return view('catalogs.categories.show')->with('category', $category);
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
        if ($id == 1) {
            return abort('403');
        }

        $category = Category::findOrFail($id);
        $selectCategories = Category::all();

        return view('catalogs.categories.edit')->with('category', $category)->with('selectCategories', $selectCategories);
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
        //
        $validator = \Validator::make($request->all(), [
            'name'        => 'required',
            'slug'        => 'required',
            'description' => 'required',
            'image'       => 'image|max:3000',
            'parent'      => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Categories::edit', $id)
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        if ($request->hasFile('image')) {

            $img = $request->file('image');

            $ext = $img->getClientOriginalExtension();

            $image_name = "category_" . str_random(16) . "." . $ext;

            $category = Category::where('id', $id)->update([
                'name'        => $request->input('name'),
                'description' => $request->input('description'),
                'slug'        => str_slug($request->input('slug')),
                'image'       => $image_name,
                'user_id'     => Auth::id(),
                'parent_id'   => $request->input('parent')
            ]);

            Image::make($img)->fit(200, 200)->save($this->admin_content_path() . $this->category_path . $image_name, 100);
            Image::make($img)->fit(200, 200)->save($this->app_content_path() . $this->category_path . $image_name, 100);

        } else {

            $category = Category::where('id', $id)->update([
                'name'        => $request->input('name'),
                'description' => $request->input('description'),
                'slug'        => $request->input('slug'),
                'user_id'     => Auth::id(),
                'parent_id'   => $request->input('parent')
            ]);

        }

        return redirect()->route('Categories::edit', $id)->with('status', '¡La categoría ha sido editada exitosamente!');
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

        $category = Category::findOrFail($id);

        $categoriesAffected = Category::where('parent_id', $id)->count();

        $productsAffected = $this->deleteTree($id);

        $uncategorizeCategories = Category::where('parent_id', $id)->update(['parent_id' => 1]);

        if ($category->image !== null) {
            if (File::exists($this->admin_content_path() . $this->category_path . $category->image) && File::exists($this->app_content_path() . $this->category_path . $category->image)) {
                File::delete($this->admin_content_path() . $this->category_path . $category->image);
                File::delete($this->app_content_path() . $this->category_path . $category->image);    
            }
        }

        $auxName = $category->name;

        $category->delete();

        return redirect()->route('Categories::index')->with('status', 'La eliminación de la categoría '. $auxName .' se ha realizado exitosamente: ' . $categoriesAffected . ' categorías afectadas, ' . $productsAffected . ' productos afectados.');

    }

    private function deleteTree($id) 
    {
        $count = 0;
        $categories = Category::where('parent_id', $id)->get();

        foreach ($categories as $category) {
            $count += Product::where('parent_id', $category->id)->count();
            Product::where('parent_id', $category->id)->update(['parent_id' => 1, 'category_id' => 1]);
        }

       return $count;

    }
}

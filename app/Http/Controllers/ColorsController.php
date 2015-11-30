<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Color;
use App\Product;
use Image;
use Auth;
use File;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colors = Color::all();

        return view('catalogs.colors.index')->with('colors', $colors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalogs.colors.create');
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
            'image'       => 'image|max:3000|required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Colors::create')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        if ($request->hasFile('image')) {

            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $image_name = "color" . str_random(16) . "." . $ext;

            $category = Color::create([
                'name'    => $request->input('name'),
                'image'   => $image_name,
                'user_id' => Auth::id()
            ]);

            $category->code = 'C' . str_pad($category->id, 3, "0", STR_PAD_LEFT);
            $category->save();

            Image::make($img)->fit(60, 60)->save($this->admin_content_path() . $this->color_path . $image_name, 100);
            Image::make($img)->fit(60, 60)->save($this->app_content_path() . $this->color_path . $image_name, 100);
        }

        return redirect()->route('Colors::create')->with('status', '¡El nuevo color se ha agregado exitosamente!');
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
        $color = Color::findOrFail($id);

        return view('catalogs.colors.edit')->with('color', $color);
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
            'image'       => 'image|max:3000'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Colors::edit', $id)
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        $color = Color::findOrFail($id);

        if ($request->hasFile('image')) {

            if (File::exists($this->admin_content_path() . $this->color_path . $color->image) && File::exists($this->app_content_path() . $this->color_path . $color->image)) {
                File::delete($this->admin_content_path() . $this->color_path . $color->image);
                File::delete($this->app_content_path() . $this->color_path . $color->image);
            }

            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $image_name = "color" . str_random(16) . "." . $ext;

            $color->name = $request->input('name');
            $color->image = $image_name;

            $color->save();

            Image::make($img)->fit(60, 60)->save($this->admin_content_path() . $this->color_path . $image_name, 100);
            Image::make($img)->fit(60, 60)->save($this->app_content_path() . $this->color_path . $image_name, 100);
        }
        else 
        {
            $color->name = $request->input('name');
            $color->save();
        }

        return redirect()->route('Colors::edit', $id)->with('status', '¡El color se ha editado correctamente!');

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
        $color = Color::findOrFail($id);

        $auxName = $color->name;

        if (File::exists($this->admin_content_path() . $this->color_path . $color->image) && File::exists($this->app_content_path() . $this->color_path . $color->image)) {
            File::delete($this->admin_content_path() . $this->color_path . $color->image);
            File::delete($this->app_content_path() . $this->color_path . $color->image);
        }

        $color->delete();

        return redirect()->route('Colors::index')->with('status', 'Color ' . $auxName . ' eliminado correctamente');
    }

    /**
     * Get specified resources in AJAX
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getJSONColors(Request $request)
    {
        if ($request->has('q')) {
            return response()->json($this->search($request->q), 200)
                        ->header('Content-Type', 'application/json; charset=utf-8\n\n')
                        ->header('X-rate-limit', '10')
                        ->setCallback($request->input('callback'));
        }
        else {
            return response()->json(['Error' => '100', 'Type' => 'Internal Server Error', 'Description' => 'Query not provided in URL'], 500)
                        ->header('X-rate-limit', '10')
                        ->setCallback($request->input('callback'));
        }
        
    }

    /**
     * Get specified resources in AJAX
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getJSONColorsByProduct(Request $request)
    {
        if ($request->has('prod')) {

            $product = Product::findOrFail($request->prod);

            if($product->colors) {

                $colors = $this->getColorsOfProduct($product->getColors->colors_ar);
            
                return response()->json($colors, 200)
                            ->header('Content-Type', 'application/json; charset=utf-8\n\n')
                            ->header('X-rate-limit', '10')
                            ->setCallback($request->input('callback'));
            } else {
                return response()->json(['Error' => '102', 'Type' => 'Model Error', 'Description' => 'Query hasn\'t colors'], 500)
                        ->header('X-rate-limit', '10')
                        ->setCallback($request->input('callback'));
            }
        }
        else {
            return response()->json(['Error' => '100', 'Type' => 'Internal Server Error', 'Description' => 'Query not provided in URL'], 500)
                        ->header('X-rate-limit', '10')
                        ->setCallback($request->input('callback'));
        }
        
    }

    /**
     * Get specified resources in AJAX
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    private function search($item, $type = null) 
    {

        $search = Color::like('name', $item)->select('id', 'name', 'code', 'image')->get();

        return $search;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Auth;
use Image;

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

            Image::make($img)->fit(400, 400)->save($this->admin_content_path() . $this->category_path . $image_name, 100);
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

        return redirect()->route('Categories::create')->with('status', '¡El slide se ha creado exitosamente!');

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
    }
}

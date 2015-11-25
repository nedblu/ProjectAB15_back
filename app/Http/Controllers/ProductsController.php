<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Color;

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
        $categories = Category::all();

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
        
        if($product->colors)
            $product->colorResources = $this->getColorsOfProduct($product->getColors->colors_ar);

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

        $categories = Category::all();

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

    public function getColorsOfProduct($array)
    {
      if (! is_array ($array))
          $array = explode(",", $array);

      if( count($array) > 1) {
          
          $count = 0;
          $colors = Color::select('name', 'image')->where('code', strtoupper($array[0]));
          
          foreach($array as $item){
              if($count > 0){
                  $colors_union = Color::select('name','image')->where('code', strtoupper($item));
                  $colors = $colors->unionAll($colors_union);
              }
              $count++;
          }
          $results = $colors->orderBy('name', 'asc')->get();
          return $results;
      }

      else {
          $results = Color::select('name', 'image')->where('code', $array)->get();
          return $results;
      }

    }
}

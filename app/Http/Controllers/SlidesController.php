<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banner;
use Image;
use Auth;
use File;

class SlidesController extends Controller
{
    protected $admin_path = '/assets/content_application/';
    protected $app_path = '/../alphabeta_web/public_html/content/slide-show/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::select(\DB::raw('*'))->orderBy('order_id')->get();
        
        return view('slides.index')->with('banners', $banners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'url'   => 'url',
            'image' => 'required|image|max:3000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('Slides::create')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        $img = $request->file('image');

        $ext = $img->getClientOriginalExtension();

        $fullName = "slide_" . str_random(16) . "." . $ext;

        if ($request->has('url'))
        {
            $banner = Banner::create([
                'title'     => $request->input('title'),
                'image'     => $fullName,
                'uri'       => $request->input('url'),
                'published' => $request->has('published') ? $request->input('published') : 0,
                'user_id'   => Auth::id(),
            ]);

            $bannerUpdateOrder = Banner::find($banner->id);

            $bannerUpdateOrder->order_id = $banner->id;

            $bannerUpdateOrder->save();

        } else {
            $banner = Banner::create([
                'title'     => $request->input('title'),
                'image'     => $fullName,
                'published' => $request->has('published') ? $request->input('published') : 0,
                'user_id'   => Auth::id(),
            ]);

            $bannerUpdateOrder = Banner::find($banner->id);

            $bannerUpdateOrder->order_id = $banner->id;

            $bannerUpdateOrder->save();
        }
        

        $destinationPath = base_path() . $this->app_path;
        $destinationAdmin = public_path() . $this->admin_path;

        Image::make($img)->fit(250, 150)->save($destinationAdmin . 'thumbnail_' . $fullName, 100);
        Image::make($img)->fit(1366, 400)->save($destinationAdmin . 'photo_' . $fullName, 100);
        Image::make($img)->fit(489, 253)->save($destinationAdmin . 'preview_' . $fullName, 100);
        Image::make($img)->fit(1366, 400)->save($destinationPath . $fullName, 100);

        return redirect()->route('Slides::create')->with('status', '¡El slide se ha creado exitosamente!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveOrder(Request $request)
    {

        $order_id = explode(',', $request->input('order'));
        $idsSorted = $order_id;
        $assoc = [];
        sort($idsSorted);

        $i = 0;

        foreach ($idsSorted as $key) {
            $assoc[$i]['id'] = $key;
            ++$i;
        }

        $i = 0;

        foreach ($order_id as $key) {
            $assoc[$i]['order_id'] = $key;
            ++$i;
        }

        foreach ($assoc as $key) {
            \DB::table('banners')->where('id', $key['id'])->update(['order_id' => $key['order_id']]);
        }

        return response()->json(['status' => 'Success', 'msg' => 'El nuevo orden de los slides se ha guardado correctamente.']);
    }
    /**
     * Uncomment in case of use Dropzone.js
     */
    /*
    public function upload(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'file' => 'image|max:3000',
        ]);


        if ($validator->fails()) {
            return response()->json(['Error'], 400);
        }

        $img = $request->file('file');

        $ext = $img->getClientOriginalExtension();

        $fullName = "slide_" . str_random(16) . "." . $ext;

        $destinationPath = base_path() . $this->app_path;
        $destinationAdmin = public_path() . $this->admin_path;

        Image::make($img)->fit(200, 120)->save($destinationAdmin . 'thumbnail_' . $fullName, 100);
        Image::make($img)->fit(1366, 400)->save($destinationPath . $fullName, 100);

        return response()->json(['OK'], 200);
    }
    */

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
        try {

            $banner = Banner::findOrFail($id);

            return view('slides.edit')->with('banner', $banner);

        } catch (ModelNotFoundException $e) {

            return redirect()->route('Slides::index');

        }
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
        try {

            $banner = Banner::findOrFail($id);

            $destinationPath = base_path() . $this->app_path;
            $destinationAdmin = public_path() . $this->admin_path;

            $thumbnail = $destinationAdmin . 'thumbnail_' . $banner->image;
            $photo = $destinationAdmin . 'photo_' . $banner->image;
            $preview = $destinationAdmin . 'preview_' . $banner->image;
            $slide = $destinationPath . $banner->image;

            if (File::exists($thumbnail) && File::exists($photo) && File::exists($slide) && File::exists($preview)) {
                File::delete($thumbnail);
                File::delete($photo);
                File::delete($photo);
                File::delete($preview);
            }
            
            $banner->delete();

            return redirect()->route('Slides::index');

        } catch (ModelNotFoundException $e) {

            return redirect()->route('Slides::index');

        }
    }
}

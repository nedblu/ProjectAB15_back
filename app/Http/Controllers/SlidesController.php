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
    //protected $admin_path = '/assets/content_application/';
    //protected $app_path = '/../alphabeta_web/public_html/content/slide-show/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('order_id')->get();
        
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

        Image::make($img)->fit(250, 150)->save($this->admin_content_path() . 'thumbnail_' . $fullName, 100);
        Image::make($img)->fit(1366, 400)->save($this->admin_content_path() . 'photo_' . $fullName, 100);
        Image::make($img)->fit(489, 253)->save($this->admin_content_path() . 'preview_' . $fullName, 100);
        Image::make($img)->fit(1366, 400)->save($this->app_content_path() . $this->slide_path . $fullName, 100);

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

        $banner = Banner::findOrFail($id);

        return view('slides.edit')->with('banner', $banner);

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
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'url'   => 'url',
            'image' => 'image|max:3000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('Slides::edit', $id)
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }


        $banner = Banner::findOrFail($id);

        if ($request->has('url')) {
            $banner->uri = $request->input('url');
        }
        if ($request->hasFile('image'))
        {

            $thumbnail = $this->admin_content_path() . 'thumbnail_' . $banner->image;
            $photo = $this->admin_content_path() . 'photo_' . $banner->image;
            $preview = $this->admin_content_path() . 'preview_' . $banner->image;
            $slide = $this->app_content_path() . $this->slide_path . $banner->image;

            if (File::exists($thumbnail) && File::exists($photo) && File::exists($slide) && File::exists($preview)) {
                File::delete($thumbnail);
                File::delete($photo);
                File::delete($slide);
                File::delete($preview);
            }

            $img = $request->file('image');

            $ext = $img->getClientOriginalExtension();

            $fullName = "slide_" . str_random(16) . "." . $ext;

            $banner->image = $fullName;

            Image::make($img)->fit(250, 150)->save($this->admin_content_path() . 'thumbnail_' . $fullName, 100);
            Image::make($img)->fit(1366, 400)->save($this->admin_content_path() . 'photo_' . $fullName, 100);
            Image::make($img)->fit(489, 253)->save($this->admin_content_path() . 'preview_' . $fullName, 100);
            Image::make($img)->fit(1366, 400)->save($this->app_content_path() . $this->slide_path . $fullName, 100);

        }

        $banner->title = $request->input('title');
        $banner->published = $request->has('published') ? $request->input('published') : 0;
        $banner->user_id = Auth::id();

        $banner->save();

        return redirect()->route('Slides::index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $banner = Banner::findOrFail($id);

        $thumbnail = $this->admin_content_path() . 'thumbnail_' . $banner->image;
        $photo = $this->admin_content_path() . 'photo_' . $banner->image;
        $preview = $this->admin_content_path() . 'preview_' . $banner->image;
        $slide = $this->app_content_path() . $this->slide_path . $banner->image;

        if (File::exists($thumbnail) && File::exists($photo) && File::exists($slide) && File::exists($preview)) {
            File::delete($thumbnail);
            File::delete($photo);
            File::delete($slide);
            File::delete($preview);
        }
        
        $banner->delete();

        return redirect()->route('Slides::index');

    }
}

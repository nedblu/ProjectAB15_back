<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Technique;
use Auth;
use Image;
use File;

class TechniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $techniques = Technique::orderBy('created_at', 'desc')->get();

        return view('techniques.index')->with('techniques', $techniques);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('techniques.create');
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
            'title'  => 'required',
            'about'  => 'required',
            'image'  => 'image|max:3000',
            'detail' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Techniques::create')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        $technique = Technique::create([
            'title'   => $request->input('title'),
            'about'   => $request->input('about'),
            'detail'  => $request->input('detail'),
            'user_id' => Auth::id()
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $image = "img" . str_random(16) . "." . $ext;

            $technique->image = $image;

            Image::make($img)->fit(100, 100)->save($this->admin_content_path() . $this->technique_path . 'thumbnail_' . $image, 100);
            Image::make($img)->fit(150, 100)->save($this->admin_content_path() . $this->technique_path . 'thumbnail_show_' . $image, 100);
            Image::make($img)->fit(400, 400)->save($this->app_content_path() . $this->technique_path . $image, 100);

            $technique->save();
        }

        return redirect()->route('Techniques::create')->with('status', '¡La técnica ha sido agregada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $technique = Technique::findOrFail($id);

        $edited = $technique->created_at->ne($technique->updated_at);

        return view('techniques.show')->with('technique', $technique)->with('edited', $edited);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $technique = Technique::findOrFail($id);

        return view('techniques.edit')->with('technique', $technique);

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
            'title'  => 'required',
            'about'  => 'required',
            'image'  => 'image|max:3000',
            'detail' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('Techniques::edit', $id)
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');
        }

        $technique = Technique::findOrFail($id);

        $technique->title = $request->input('title');
        $technique->about = $request->input('about');
        $technique->detail = $request->input('detail');

        if ($request->hasFile('image')) {

            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $image = "img" . str_random(16) . "." . $ext;

            $thumbnail = $this->admin_content_path() . $this->technique_path . 'thumbnail_' . $technique->image;
            $thumbnail_show = $this->admin_content_path() . $this->technique_path . 'thumbnail_show_' . $technique->image;
            $technique_image = $this->app_content_path() . $this->technique_path . $technique->image;

            if (File::exists($thumbnail) && File::exists($thumbnail_show) && File::exists($technique_image)) {
                File::delete($thumbnail);
                File::delete($thumbnail_show);
                File::delete($technique_image);
            }

            $technique->image = $image;

            Image::make($img)->fit(100, 100)->save($this->admin_content_path() . $this->technique_path . 'thumbnail_' . $image, 100);
            Image::make($img)->fit(150, 100)->save($this->admin_content_path() . $this->technique_path . 'thumbnail_show_' . $image, 100);
            Image::make($img)->fit(400, 400)->save($this->app_content_path() . $this->technique_path . $image, 100);
        }

        $technique->save();

        return redirect()->route('Techniques::edit', $id)->with('status', '¡La técnica ha sido editada correctamente!');

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
        $technique = Technique::findOrFail($id);

        $thumbnail = $this->admin_content_path() . $this->technique_path . 'thumbnail_' . $technique->image;
        $thumbnail_show = $this->admin_content_path() . $this->technique_path . 'thumbnail_show_' . $technique->image;
        $technique_image = $this->app_content_path() . $this->technique_path . $technique->image;

        if (File::exists($thumbnail) && File::exists($thumbnail_show) && File::exists($technique_image)) {
            File::delete($thumbnail);
            File::delete($thumbnail_show);
            File::delete($technique_image);
        }

        $technique->delete();

        return redirect()->route('Techniques::index');
    }
}

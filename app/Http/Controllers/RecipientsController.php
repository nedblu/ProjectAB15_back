<?php

namespace AlphaBeta\Http\Controllers;

use Illuminate\Http\Request;

use AlphaBeta\Http\Requests;
use AlphaBeta\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use AlphaBeta\Emailcontact;

class RecipientsController extends Controller
{

    protected $maximum = 4;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $recipients = Emailcontact::all();

        $used = Emailcontact::all()->count();

        return view('recipients.index')->with('recipients',$recipients)->with('used',$used)->with('max',$this->maximum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(Emailcontact::all()->count() >= $this->maximum)
        {
            return abort('404');

        }
        return view('recipients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:emailcontacts,email',
        ]);

        if ($validator->fails()) {

            return redirect()->route('Recipients::create')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');

        }

        $recipient = new Emailcontact;

        $recipient->name = $request->name;
        $recipient->email = $request->email;
        $recipient->user_id = 2;

        $recipient->save();

        return redirect()->route('Recipients::create')->with('status', '¡Destinatario agregado exitosamente!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        try {

            $recipient = Emailcontact::findOrFail($id);

            return view('recipients.edit')->with('recipient',$recipient);

        } catch(ModelNotFoundException $e) {

            return redirect()->route('Recipients::index');

        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {

            return redirect()->route('Recipients::edit',$id)
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');

        }

        try {

            $recipient = Emailcontact::findOrFail($id);

            $recipient->name = $request->name;
            $recipient->email = $request->email;
            $recipient->user_id = 2;

            $recipient->save();

            return redirect()->route('Recipients::edit',$id)->with('status', '¡El destinatario se ha editado exitosamente!');

        } catch(ModelNotFoundException $e) {

            return redirect()->route('Recipients::edit',$id);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {

            $recipient = Emailcontact::findOrFail($id);

            $recipient->delete();

            return redirect()->route('Recipients::index');

        } catch(ModelNotFoundException $e) {

            return redirect()->route('Recipients::index');

        }
    }
}

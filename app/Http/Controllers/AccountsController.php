<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;
use Log;

class AccountsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->is('support')) {

            $accounts = User::allUsersWithRoles();
        } 
        else if (Auth::user()->is('owner')) {
            
            $accounts = User::noBelongsToRoles(['support']);
        }
        else {
            $accounts = User::noBelongsToRoles(['support','owner']);
        }
        
        $used = User::where('id','<>',1)->where('id','<>',2)->count();

        return view('accounts.index')->with('accounts',$accounts)->with('used',$used)->with('max',env('ACCOUNTS_LIMIT'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (User::where('id','<>',1)->where('id','<>',2)->count() >= env('ACCOUNTS_LIMIT'))
        {

            Log::error(
                'Accounts Error: Trying create new user but the limit of users has been exceeded, aborting operation.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@create',
                   'type'      => 'ERR001: Limit exceeded'
            ]);

            return abort('404');
        }
        
        if (Auth::user()->is('support'))
            $rolesAvailables = Role::all();
        elseif (Auth::user()->is('admin'))
            $rolesAvailables = Role::where('slug','<>','support')->where('slug','<>','owner')->get();
        else
            $rolesAvailables = Role::where('slug','<>','support')->get();

        return view('accounts.create')->with('rolesAvailables',$rolesAvailables);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (User::where('id','<>',1)->where('id','<>',2)->count() >= env('ACCOUNTS_LIMIT'))
        {

            Log::error(
                'Accounts Error: Trying save new user but the limit of users has been exceeded, aborting operation.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@store',
                   'type'      => 'ERR001: Limit exceeded'
                ]);

            return abort('404');
        }

        $validator = \Validator::make($request->all(), [
            'first_name'   => 'required',
            'last_name'    => 'required',
            'email'        => 'required|email|unique:users,email',
            'type_account' => 'required|numeric'
        ]);

        if ($validator->fails()) {

            Log::notice('Accounts Notice: The form contains some errors.');
            return redirect()->route('Accounts::create')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');

        }

        $temporal_username = strstr($request->email, '@', true) . mt_rand(10, 100);
        $temporal_password = str_random(16);
        $activation_code   = str_random(64);

        $account = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'username'   => $temporal_username,
            'email'      => $request->email,
            'password'   => \Hash::make($temporal_password),
            'code'       => $activation_code
        ]);

        $account->attachRole($request->type_account);

        $roleAssigned = $account->roles[0];

        Log::info(
            'Accounts Info: The new user ' . $account->first_name . ' ' . $account->last_name . ' has been created correctly.',
            [
               'user-id'   => Auth::id(),
               'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
               'action'    => 'AccountsController@store',
               'type'      => 'INF001: Event successful'
        ]);

        \Mail::send('emails.newuser',  ['account' => $account, 'role' => $roleAssigned, 'password' => $temporal_password], function($message) use ($account,$roleAssigned) {

            $message->from('no-reply@alphabeta.com.mx', 'No-Reply');
            $message->to($account->email, $account->first_name);
            $message->subject('Hola ' . $account->first_name . ' ' . $account->last_name . ' AlphaBeta te ha agregado como ' . $roleAssigned->name);
        
        });

        Log::info(
            'Accounts Info: New mail for confirmation has been sent to ' . $account->first_name . ' ' . $account->last_name . '.',
            [
               'user-id'   => Auth::id(),
               'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
               'action'    => 'AccountsController@store',
               'type'      => 'INF002 = Email Successful'
        ]);

        return redirect()->route('Accounts::create')->with('status', '¡La cuenta ha sido creada correctamente!');
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

            $account = User::findOrFail($id);

            if (Auth::user()->is('support'))
                $rolesAvailables = Role::all();
            elseif (Auth::user()->is('admin'))
                $rolesAvailables = Role::where('slug','<>','support')->where('slug','<>','owner')->get();
            else
                $rolesAvailables = Role::where('slug','<>','support')->get();

            return view('accounts.edit')->with('account',$account)->with('rolesAvailables',$rolesAvailables);

        } catch(ModelNotFoundException $e) {

            Log::error(
                'Accounts Error: The user doesn\'t exist.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@edit',
                   'type'      => 'ERR002 = Not found'
            ]);

            return redirect()->route('Accounts::index');
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
        try {

            $account = User::findOrFail($id);

            $account->detachAllRoles();

            $account->attachRole($request->type_account);

            $roleAssigned = $account->roles[0];

            Log::info(
                'Accounts Info: The role has changed for user ' . $account->first_name . ' ' . $account->last_name . '.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@update',
                   'type'      => 'INF003 = Role change Successful'
            ]);

            \Mail::send('emails.edituser',  ['account' => $account, 'role' => $roleAssigned], function($message) use ($account,$roleAssigned) {

                $message->from('no-reply@alphabeta.com.mx', 'No-Reply');
                $message->to($account->email, $account->first_name);
                $message->subject('Hola ' . $account->first_name . ' ' . $account->last_name . ' AlphaBeta te ha reasignado a ' . $roleAssigned->name);
            
            });

            Log::info(
                'Accounts Info: New mail for notification has been sent to ' . $account->first_name . ' ' . $account->last_name . '.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@update',
                   'type'      => 'INF002 = Email Successful'
            ]);

            return redirect()->route('Accounts::edit', $id)->with('status', '¡La cuenta se ha editado exitosamente!');

        } catch(ModelNotFoundException $e) {

            Log::error(
                'Accounts Error: The user doesn\'t exist.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@update',
                   'type'      => 'ERR002 = Not found'
            ]);

            return redirect()->route('Accounts::edit', $id);
        }
    }

    /**
     * Activate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activation($id)
    {
        try {

            $account = User::findOrFail($id);
            
            if ($account->active) {
                $account->active = 0;
                $message = 'La cuenta se ha desactivado exitosamente.';
                Log::info('Accounts Info: The user ' . Auth::user()->first_name . ' has disabled to user ' . $account->first_name);
            }
            else {
                $account->active = 1;
                $message = 'La cuenta se activó exitosamente.';
                Log::info('Accounts Info: The user ' . Auth::user()->first_name . ' has enabled to user ' . $account->first_name);
            }

            $account->save();
            
            return redirect()->route('Accounts::edit',$id)->with('status', $message);

        } catch(ModelNotFoundException $e) {

            Log::error(
                'Accounts Error: The user doesn\'t exist.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@activation',
                   'type'      => 'ERR002 = Not found'
            ]);
            
            return redirect()->route('Accounts::edit',$id);
        }

    }

    /**
     * Reset password of the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reset($id)
    {
        try {

            $account = User::findOrFail($id);
            
            $account->password = \Hash::make('Password123@');

            $account->save();
            
            return redirect()->route('Accounts::edit',$id)->with('status', 'La contraseña ha sido restablecida exitosamente a Password123@');

        } catch(ModelNotFoundException $e) {

            Log::error(
                'Accounts Error: The user doesn\'t exist.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@reset',
                   'type'      => 'ERR002 = Not found'
            ]);

            return redirect()->route('Accounts::edit',$id);

        }

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

            $account = User::find($id);
            
            $aux = $account->first_name . ' ' . $account->last_name;

            $account->delete();

            Log::info(
                'Accounts Info: The account of ' . $aux . ' has been deleted.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@destroy',
                   'type'      => 'INF001 = Event Successful'
            ]);

            return redirect()->route('Accounts::index');

        } catch (ModelNotFoundException $e) {

            Log::error(
                'Accounts Error: The user doesn\'t exist.',
                [
                   'user-id'   => Auth::id(),
                   'user-name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                   'action'    => 'AccountsController@destroy',
                   'type'      => 'ERR002 = Not found'
            ]);

            return redirect()->route('Accounts::index');

        }
    }

    /**
     * Edit notice
     *
     * @return \Illuminate\Http\Response
     */
    public function notice()
    {
        $notice = \DB::table('notices')->where('id',1)->get();

        return view('accounts.notice')->with('notice',$notice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateNotice(Request $request)
    {
        $notice = \DB::table('notices')->where('id',1)->count();

        if ($notice) {

            if ($request->has('body')) {

                \DB::table('notices')
                ->where('id', 1)
                ->update(['body' => $request->body, 'published' => $request->publish]);
                return redirect()->route('Accounts::notice');
            }
            else {

                \DB::table('notices')
                ->where('id', 1)
                ->update(['published' => $request->publish]);
                 return redirect()->route('Accounts::notice');
            }
        }
        else {
            if ($request->has('body')) {
                \DB::table('notices')->insert(
                    ['body' => $request->body, 'published' => $request->publish]
                );
                return redirect()->route('Accounts::notice');
            }
            else
            {
                return redirect()->route('Accounts::notice');
            }
            
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile($id = null)
    {

        if (!is_null($id)) {

            try {
                $profile = User::findOrFail($id);
                
                return view('accounts.profile_index')->with('profile',$profile)->with('flag', true);

            } catch (ModelNotFoundException $e) {

                return redirect()->route('Accounts::index');

            }


        } else {

            try 
            {
                $profile = User::findOrFail(Auth::id());

                return view('accounts.profile_index')->with('profile',$profile)->with('flag', false);

            } catch (ModelNotFoundException $e) {

                return redirect()->route('Accounts::index');

            }
        }  

    }

    /**
     * Edit profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile_edit()
    {

        try {

            $profile = User::findOrFail(Auth::id());
            
            return view('accounts.profile_edit')->with('profile',$profile);

        } catch (ModelNotFoundException $e) {

            return redirect()->route('Profile::index');

        }


    }

    public function profile_update(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'email'        => 'email|unique:users,email,'.Auth::id(),
            'password'     => 'confirmed'
        ]);

        if ($validator->fails()) {

            return redirect()->route('Profile::edit')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error', '¡Ops! Algo ha salido mal, por favor atiende a los siguientes mensajes:');

        }

        $profile = User::find(Auth::id());

        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');

        if ($profile->email != $request->input('email')) {
            $profile->email = $request->input('email');
        }

        if (!empty($request->input('password'))) {
            $profile->password = \Hash::make($request->input('password'));
        }

        $profile->save();

        return redirect()->route('Profile::edit')->with('status', 'Tu perfil se ha actualizado exitosamente.');;

    }
}

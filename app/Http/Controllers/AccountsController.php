<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;

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

			$accounts = User::getUsersWithRoles();
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
		if(User::where('id','<>',1)->where('id','<>',2)->count() >= env('ACCOUNTS_LIMIT'))
		{
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
		$validator = \Validator::make($request->all(), [
			'first_name'   => 'required',
			'last_name'    => 'required',
			'email'        => 'required|email|unique:users,email',
			'type_account' => 'required|numeric'
		]);

		if ($validator->fails()) {

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

		\Mail::send('emails.newuser',  ['account' => $account, 'role' => $roleAssigned, 'password' => $temporal_password], function($message) use ($account,$roleAssigned) {

			$message->from('no-reply@alphabeta.com.mx', 'No-Reply');
			$message->to($account->email, $account->first_name);
			$message->subject('Hola ' . $account->first_name . ' ' . $account->last_name . ' AlphaBeta te ha agregado como ' . $roleAssigned->name);
		
		});

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

            \Mail::send('emails.edituser',  ['account' => $account, 'role' => $roleAssigned], function($message) use ($account,$roleAssigned) {

				$message->from('no-reply@alphabeta.com.mx', 'No-Reply');
				$message->to($account->email, $account->first_name);
				$message->subject('Hola ' . $account->first_name . ' ' . $account->last_name . ' AlphaBeta te ha reasignado a ' . $roleAssigned->name);
			
			});

            return redirect()->route('Accounts::edit',$id)->with('status', '¡La cuenta se ha editado exitosamente!');

        } catch(ModelNotFoundException $e) {
            return redirect()->route('Accounts::edit',$id);
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
			}
			else {
				$account->active = 1;
				$message = 'La cuenta se activó exitosamente.';
			}

			$account->save();
			
			return redirect()->route('Accounts::edit',$id)->with('status', $message);

		} catch(ModelNotFoundException $e) {
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

            $account = User::findOrFail($id);

            $account->delete();

            return redirect()->route('Accounts::index');

        } catch(ModelNotFoundException $e) {

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
}

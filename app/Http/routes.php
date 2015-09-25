<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', ['middleware' => 'auth', function() { 
	
	// Get the image
	//$image = Image::make('C:\xampp\htdocs\projects\alphabeta_web\public_html\img\ABlogo.png');
	//return $image->response();
	return view('templates.main');
}]);*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'Home::index', function() { 
		
		// Get the image
		//$image = Image::make('C:\xampp\htdocs\projects\alphabeta_web\public_html\img\ABlogo.png');
		//return $image->response();
		
		return view('templates.test');
	}]);


	/* RECIPIENTS APP */

	Route::group(['as' => 'Recipients::', 'prefix' => 'recipients'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'RecipientsController@index']);

	    Route::get('/create', ['as' => 'create', 'uses' => 'RecipientsController@create']);

	    Route::post('/create', ['as' => 'store', 'uses' => 'RecipientsController@store']);

	    Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'RecipientsController@edit'])->where('id','[0-9]+');

	    Route::put('/update/{id}', ['as' => 'update', 'uses' => 'RecipientsController@update'])->where('id','[0-9]+');

	    Route::delete('/destroy/{id}', ['as' => 'destroy', 'uses' => 'RecipientsController@destroy'])->where('id','[0-9]+');

	});

});



/* AUTHENTICATION SYSTEM */

Route::group(['as' => 'Auth::', 'prefix' => 'auth'], function () {
    
    Route::get('/login', ['as' => 'index', 'uses' => 'Auth\AuthController@getLogin']);

    Route::post('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@authenticate']);

    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'] );

});

/* PASSWORD REMAINDER APP */

Route::group(['as' => 'Password::', 'prefix' => 'password'], function () {
    
    Route::get('/email', ['as' => 'index', 'uses' => 'Auth\PasswordController@getEmail']);

    Route::post('/email', ['as' => 'email', 'uses' => 'Auth\PasswordController@postEmail']);

    Route::get('/reset/{token}', ['as' => 'resetToken', 'uses' => 'Auth\PasswordController@getReset'] );

    Route::post('/reset', ['as' => 'reset', 'uses' => 'Auth\PasswordController@postReset'] );

});

Route::get('/createroles', function() {

	/*$adminRole = Bican\Roles\Models\Role::create([
	    'name' => 'SUPPORT',
	    'slug' => str_slug('SUPPORT'),
	    'description' => 'Account for Support, please don\'t login here.', // optional
	    'level' => 1, // optional, set to 1 by default
	]);

	$adminRole = Bican\Roles\Models\Role::create([
	    'name' => 'OWNER',
	    'slug' => str_slug('OWNER'),
	    'description' => 'Main account for the OWNER, with all permissions.', // optional
	    'level' => 2, // optional, set to 1 by default
	]);

	$adminRole = Bican\Roles\Models\Role::create([
	    'name' => 'ADMIN',
	    'slug' => str_slug('ADMIN'),
	    'description' => 'Use this for people that have a level for delete things and modify configs.', // optional
	    'level' => 3, // optional, set to 1 by default
	]);

	$adminRole = Bican\Roles\Models\Role::create([
	    'name' => 'EDITOR',
	    'slug' => str_slug('EDITOR'),
	    'description' => 'Use this for people that helps to fix typos.', // optional
	    'level' => 4, // optional, set to 1 by default
	]);

	$user = AlphaBeta\User::find(1);

	$user->attachRole(1);

	$user = AlphaBeta\User::find(2);

	$user->attachRole(1);

	$user = AlphaBeta\User::find(3);

	$user->attachRole(2);

	$user = AlphaBeta\User::find(4);

	$user->attachRole(3);*/

	print_r($request);



});

// Authentication routes...
//Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin']);
//Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
//Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

// Password reset link request routes...
//Route::get('password/email', ['as' => 'password/email', 'uses' => 'Auth\PasswordController@getEmail']);
//Route::post('password/email', ['as' => 'password/postEmail', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
//Route::get('password/reset/{token}', ['as' => 'password/reset', 'uses' => 'Auth\PasswordController@getReset']);
//Route::post('password/reset', ['as' => 'password/postReset', 'uses' =>  'Auth\PasswordController@postReset']);
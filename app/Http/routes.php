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
		
		return view('home');
	}]);

	/* ACCOUNTS APP */

	Route::group(['as' => 'Accounts::', 'prefix' => 'accounts'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'AccountsController@index']);

	    Route::get('/create', ['as' => 'create', 'uses' => 'AccountsController@create']);

	    Route::post('/create', ['as' => 'store', 'uses' => 'AccountsController@store']);

	    Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'AccountsController@edit'])->where('id','[0-9]+');

	    Route::put('/activation/{id}', ['as' => 'activation', 'uses' => 'AccountsController@activation'])->where('id','[0-9]+');

	    Route::put('/reset/{id}', ['as' => 'reset', 'uses' => 'AccountsController@reset'])->where('id','[0-9]+');

	    Route::put('/update/{id}', ['as' => 'update', 'uses' => 'AccountsController@update'])->where('id','[0-9]+');

	    Route::delete('/destroy/{id}', ['as' => 'destroy', 'uses' => 'AccountsController@destroy'])->where('id','[0-9]+');

	    Route::get('/notice', ['as' => 'notice', 'uses' => 'AccountsController@notice']);

	    Route::put('/notice', ['as' => 'update-notice', 'uses' => 'AccountsController@updateNotice']);

	});


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

    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\AuthController@activate']);

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

Route::get('/test', function() {

	$users = DB::table('view_role_user')->get();
	echo "<pre>";
	print_r($users);

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
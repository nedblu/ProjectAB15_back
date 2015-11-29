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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'Home::index', function() { 
		
		return view('home');
	}]);

	/* ACCOUNTS APP */

	Route::group(['as' => 'Accounts::', 'middleware' => 'role:support|owner|admin', 'prefix' => 'accounts'], function () {

    	Route::get('/', ['as' => 'index', 'uses' => 'AccountsController@index']);

	    Route::get('create', ['as' => 'create', 'uses' => 'AccountsController@create']);

	    Route::post('create', ['as' => 'store', 'uses' => 'AccountsController@store']);

	    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'AccountsController@edit'])->where('id','[0-9]+');

	    Route::put('activation/{id}', ['as' => 'activation', 'uses' => 'AccountsController@activation'])->where('id','[0-9]+');

	    Route::put('reset/{id}', ['as' => 'reset', 'uses' => 'AccountsController@reset'])->where('id','[0-9]+');

	    Route::put('update/{id}', ['as' => 'update', 'uses' => 'AccountsController@update'])->where('id','[0-9]+');

	    Route::delete('destroy/{id}', ['as' => 'destroy', 'uses' => 'AccountsController@destroy'])->where('id','[0-9]+');

	    Route::get('notice', ['as' => 'notice', 'uses' => 'AccountsController@notice']);

    	Route::put('notice', ['as' => 'update-notice', 'uses' => 'AccountsController@updateNotice']);

	});

	/* PROFILE APP */

	Route::group(['as' => 'Profile::', 'prefix' => 'profile'], function () {

	    Route::get('/{id?}', ['as' => 'index', 'uses' => 'AccountsController@profile'])->where('id','[0-9]+');

	    Route::get('edit', ['as' => 'edit', 'uses' => 'AccountsController@profile_edit']);

	    Route::put('update', ['as' => 'update', 'uses' => 'AccountsController@profile_update']);

	});

	Route::get('logs', ['middleware' => 'role:support', 'as' => 'support-event', 'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index']);

	/* CATALOG APP */

	Route::group(['as' => 'Products::', 'prefix' => 'products'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'ProductsController@index']);

	    Route::get('create', ['as' => 'create', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ProductsController@create']);

	    Route::post('store', ['as' => 'store', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ProductsController@store']);

	    Route::get('show/{id}', ['as' => 'show', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ProductsController@show'])->where('id','[0-9]+');

		Route::get('edit/{id}', ['as' => 'edit', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ProductsController@edit'])->where('id','[0-9]+');

		Route::put('update/{id}', ['as' => 'update', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ProductsController@update'])->where('id','[0-9]+');

	    Route::delete('destroy/{id}', ['as' => 'destroy', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ProductsController@destroy'])->where('id','[0-9]+');

	});

	/* CATEGORIES APP */

	Route::group(['as' => 'Categories::', 'middleware' => 'role:support', 'prefix' => 'categories'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'CategoriesController@index']);

	    Route::get('create', ['as' => 'create', 'uses' => 'CategoriesController@create']);

	    Route::post('store', ['as' => 'store', 'uses' => 'CategoriesController@store']);

	    Route::get('show/{id}', ['as' => 'show', 'uses' => 'CategoriesController@show'])->where('id','[0-9]+');

		Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CategoriesController@edit'])->where('id','[0-9]+');

		Route::put('update/{id}', ['as' => 'update', 'uses' => 'CategoriesController@update'])->where('id','[0-9]+');

	    Route::delete('destroy/{id}', ['as' => 'destroy', 'uses' => 'CategoriesController@destroy'])->where('id','[0-9]+');

	});

	/* COLORS APP */

	Route::group(['as' => 'Colors::', 'prefix' => 'colors'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'ColorsController@index']);

	    Route::get('create', ['as' => 'create', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ColorsController@create']);

	    Route::post('store', ['as' => 'store', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ColorsController@store']);

	    Route::get('show/{id}', ['as' => 'show', 'uses' => 'ColorsController@show'])->where('id','[0-9]+');

		Route::get('edit/{id}', ['as' => 'edit', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ColorsController@edit'])->where('id','[0-9]+');

		Route::put('update/{id}', ['as' => 'update', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ColorsController@update'])->where('id','[0-9]+');

	    Route::delete('destroy/{id}', ['as' => 'destroy', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'ColorsController@destroy'])->where('id','[0-9]+');

	    Route::get('json', ['as' => 'json_colors', 'uses' => 'ColorsController@getJSONColors']);

	    Route::get('product/json', ['as' => 'json_product_colors', 'uses' => 'ColorsController@getJSONColorsByProduct']);

	});

	/* SLIDESHOW APP */

	Route::group(['as' => 'Slides::', 'prefix' => 'slides'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'SlidesController@index']);

	    Route::put('order', ['as' => 'saveorder', 'uses' => 'SlidesController@saveOrder']);

	    Route::get('create', ['as' => 'create', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'SlidesController@create']);

	    Route::post('create', ['as' => 'create', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'SlidesController@store']);

	    Route::delete('destroy/{id}', ['as' => 'destroy', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'SlidesController@destroy'])->where('id','[0-9]+');

	    Route::get('edit/{id}', ['as' => 'edit', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'SlidesController@edit'])->where('id','[0-9]+');

	    Route::put('update/{id}', ['as' => 'update', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'SlidesController@update'])->where('id','[0-9]+');

	});


	/* RECIPIENTS APP */

	Route::group(['as' => 'Recipients::', 'prefix' => 'recipients'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'RecipientsController@index']);

	    Route::get('create', ['as' => 'create', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'RecipientsController@create']);

	    Route::post('create', ['as' => 'store', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'RecipientsController@store']);

	    Route::get('edit/{id}', ['as' => 'edit', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'RecipientsController@edit'])->where('id','[0-9]+');

	    Route::put('update/{id}', ['as' => 'update', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'RecipientsController@update'])->where('id','[0-9]+');

	    Route::delete('destroy/{id}', ['as' => 'destroy', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'RecipientsController@destroy'])->where('id','[0-9]+');

	});

	/* TECHNIQUES APP */

	Route::group(['as' => 'Techniques::', 'prefix' => 'techniques'], function () {
	    
	    Route::get('/', ['as' => 'index', 'uses' => 'TechniquesController@index']);

	    Route::get('show/{id}', ['as' => 'show', 'uses' => 'TechniquesController@show'])->where('id','[0-9]+');

	    Route::get('create', ['as' => 'create', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'TechniquesController@create']);

	    Route::post('create', ['as' => 'store', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'TechniquesController@store']);

	    Route::get('edit/{id}', ['as' => 'edit', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'TechniquesController@edit'])->where('id','[0-9]+');

	    Route::put('update/{id}', ['as' => 'update', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'TechniquesController@update'])->where('id','[0-9]+');

	    Route::delete('destroy/{id}', ['as' => 'destroy', 'middleware' => 'role:support|owner|admin|editor', 'uses' => 'TechniquesController@destroy'])->where('id','[0-9]+');

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
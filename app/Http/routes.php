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

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('/dashboard', 'Admin\DashboardController@index');

	Route::get('/review', 'Admin\ReviewController@index');
	Route::get('/review/create', 'Admin\ReviewController@create');
	
	Route::get('/product', 'Admin\ProductController@index');
	Route::get('/product/create', 'Admin\ProductController@create');
	Route::get('/product/edit/{id}', 'Admin\ProductController@edit');
	Route::get('/product/show/{id}', 'Admin\ProductController@show');
	Route::post('/product/update/{id}', 'Admin\ProductController@update');
	Route::post('/product/store', 'Admin\ProductController@store');
	Route::get('/product/destroy/{id}', 'Admin\ProductController@destroy');

	Route::get('/category', 'Admin\CategoryController@index');	
	Route::get('/category/create', 'Admin\CategoryController@create');
	Route::get('/category/edit/{id}', 'Admin\CategoryController@edit');
	Route::get('/category/show/{id}', 'Admin\CategoryController@show');
	Route::post('/category/update/{id}', 'Admin\CategoryController@update');
	Route::post('/category/store', 'Admin\CategoryController@store');
	Route::get('/category/destroy/{id}', 'Admin\CategoryController@destroy');

	Route::get('/categoryBlog', 'Admin\CategoryBlogController@index');
	
	Route::get('/blog', 'Admin\BlogController@index');
	Route::get('/blog/create', 'Admin\BlogController@create');
});


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

	Route::get('/user', 'Admin\UserController@index');
	Route::get('/user/create', 'Admin\UserController@create');
	Route::get('/user/edit/{id}', 'Admin\UserController@edit');
	Route::get('/user/show/{id}', 'Admin\UserController@show');
	Route::post('/user/update/{id}', 'Admin\UserController@update');
	Route::post('/user/store', 'Admin\UserController@store');
	Route::get('/user/destroy/{id}', 'Admin\UserController@destroy');

	Route::get('/userProfile', 'Admin\UserProfileController@index');
	Route::get('/userProfile/create', 'Admin\UserProfileController@create');
	Route::get('/userProfile/edit/{id}', 'Admin\UserProfileController@edit');
	Route::get('/userProfile/show/{id}', 'Admin\UserProfileController@show');
	Route::post('/userProfile/update/{id}', 'Admin\UserProfileController@update');
	Route::post('/userProfile/store', 'Admin\UserProfileController@store');
	Route::get('/userProfile/destroy/{id}', 'Admin\UserProfileController@destroy');

	Route::get('/review', 'Admin\ReviewController@index');
	Route::get('/review/create', 'Admin\ReviewController@create');
	Route::get('/review/edit/{id}', 'Admin\ReviewController@edit');
	Route::get('/review/show/{id}', 'Admin\ReviewController@show');
	Route::post('/review/update/{id}', 'Admin\ReviewController@update');
	Route::post('/review/store', 'Admin\ReviewController@store');
	Route::get('/review/destroy/{id}', 'Admin\ReviewController@destroy');
	
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
	Route::get('/categoryBlog/create', 'Admin\CategoryBlogController@create');
	Route::get('/categoryBlog/edit/{id}', 'Admin\CategoryBlogController@edit');
	Route::post('/categoryBlog/update/{id}', 'Admin\CategoryBlogController@update');
	Route::post('/categoryBlog/store', 'Admin\CategoryBlogController@store');
	Route::get('/categoryBlog/destroy/{id}', 'Admin\CategoryBlogController@destroy');
	
	Route::get('/blog', 'Admin\BlogController@index');
	Route::get('/blog/create', 'Admin\BlogController@create');
	Route::get('/blog/edit/{id}', 'Admin\BlogController@edit');
	Route::post('/blog/update/{id}', 'Admin\BlogController@update');
	Route::post('/blog/store', 'Admin\BlogController@store');
	Route::get('/blog/destroy/{id}', 'Admin\BlogController@destroy');

	Route::get('/slider', 'Admin\SliderController@index');
	Route::get('/slider/create', 'Admin\SliderController@create');
	Route::get('/slider/edit/{id}', 'Admin\SliderController@edit');
	Route::get('/slider/show/{id}', 'Admin\SliderController@show');
	Route::post('/slider/update/{id}', 'Admin\SliderController@update');
	Route::post('/slider/store', 'Admin\SliderController@store');
	Route::get('/slider/destroy/{id}', 'Admin\SliderController@destroy');

	Route::get('/order', 'Admin\OrderController@index');
	Route::get('/order/create', 'Admin\OrderController@create');
	Route::get('/order/edit/{id}', 'Admin\OrderController@edit');
	Route::get('/order/show/{id}', 'Admin\OrderController@show');
	Route::post('/order/update/{id}', 'Admin\OrderController@update');
	Route::post('/order/store', 'Admin\OrderController@store');
	Route::get('/order/destroy/{id}', 'Admin\OrderController@destroy');

	Route::get('/orderItem', 'Admin\OrderItemController@index');
	Route::get('/orderItem/create', 'Admin\OrderItemController@create');
	Route::get('/orderItem/edit/{id}', 'Admin\OrderItemController@edit');
	Route::get('/orderItem/show/{id}', 'Admin\OrderItemController@show');
	Route::post('/orderItem/update/{id}', 'Admin\OrderItemController@update');
	Route::post('/orderItem/store', 'Admin\OrderItemController@store');
	Route::get('/orderItem/destroy/{id}', 'Admin\OrderItemController@destroy');

	Route::get('/setting', 'Admin\SettingController@index');
	Route::get('/setting/create', 'Admin\SettingController@create');
	Route::get('/setting/edit/{id}', 'Admin\SettingController@edit');
	Route::get('/setting/show/{id}', 'Admin\SettingController@show');
	Route::post('/setting/update/{id}', 'Admin\SettingController@update');
	Route::post('/setting/store', 'Admin\SettingController@store');
	Route::get('/setting/destroy/{id}', 'Admin\SettingController@destroy');
});


<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('Register', 'Auth\RegisterController@create')->name('Register');

Route::post('Login', 'Auth\LoginController@login')->name('Login');

Route::post('NuevoProducto', 'ProductController@store')->name('NuevoProducto');

Route::post('SaveImage', 'ProductController@saveimage')->name('SaveImage');

Route::get('/home', function () {
    return view('index');
});
	
Route::get('/product', function () {
    return view('pages/product'); 
});

Route::get('/carshop', function () {
    return view('pages/carshop'); 
});

Route::get('/register', function () {
    return view('pages/CreateAcount'); 
});

Route::get('/login', function () {
    return view('pages/login'); 
});

Route::get('/add', function () {
    return view('pages/addProduct'); 
});


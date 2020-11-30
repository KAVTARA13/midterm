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

Route::get('/',"ProductsController@index")->name("index");
Route::get('/single/{id}',"ProductsController@single")->name("name");


Route::get('/contact', function () {
    return view('guest.contact');
})->name("contact");

Route::get('/about', function () {
    return view('guest.about');
})->name("about");

Route::get('/product',"ProductsController@product")->name("product");

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/comments',"ProductsController@comment")->name("comment");
Route::post('/message',"ProductsController@message")->name("message");

Route::get('/admin',"ProductsController@adminIndex")->name("admin");
Route::post('/admin/store',"ProductsController@adminStore")->name("adminstore");
Route::post('/admin/delete',"ProductsController@delete")->name("admindelete");
Route::get('/admin/edit/{id}',"ProductsController@edit")->name("adminedit");
Route::post('/admin/update',"ProductsController@update")->name("adminupdate");
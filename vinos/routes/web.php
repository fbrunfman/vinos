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

Route::get('/', function () {
    return view('indice');
});
Route::get('/preguntas_frecuentes', function (){
return view('preguntas');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');
Route::post('/products', 'ProductController@store');


// Route::get('products', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
//  }]);

//  Route::get('/products',function(){
//      return view ('products');
//  })->middleware(Admin::class);

Route::get('/products', 'ProductController@index')->middleware('admin');
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

//  use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');

});
Route::get('/index',"PageController@index") ->name("index") ;
Route::get('/services',"PageController@Services")->name("service");




Auth::routes();


// Route::resource('/posts ','PostController');
// Route::get('posts/{id}', 'PostController@show');
// Route::get('posts/create', 'PostController@create');
Route::resource('posts', 'PostOur1');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

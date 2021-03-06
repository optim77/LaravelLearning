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

Route::get('/','VideosController@index');

Route::get('/contact',"Main@contact");
Route::get('/about',"Main@about");



Route::group(['middleware' => ['web']], function (){

    /*Route::get('/videos',"VideosController@index");
    Route::get('/videos/create',"VideosController@create");
    Route::get('/videos/{id}',"VideosController@show");
    Route::post('/videos','VideosController@store');*/
    Route::resource('videos','VideosController');
    Auth::routes();
});





//Route::get('/home', 'HomeController@index')->name('home');

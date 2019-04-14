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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//contact us
Route::get ('about','PageController@about')->name('about');
Route::get ('contact','PageController@contact')->name('contact');
Route::get ('details','DetailController@index')->name('details');

Route::resource('form','FormController',['except'=>'create']);
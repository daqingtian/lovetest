<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('first');
});
//Route::get('welcome', function () {
//    return view('welcome');
//});
//Route::get('photo', function () {
//    return view('photo');
//});
//Route::get('register',['as' =>'profile'],'RegisterController@index');
//Route::get('first',function (){
//    return view('first');
//});

Auth::routes();
//Route::get('/','HomeController@index');
//Route::get('register', 'RegisterController@index');

//Route::get('form','FormController@index');
//Route::post('form','FormController@store');

Route::group(['middleware'=>'auth'],function () {
    Route::get('home','HomeController@index');
    Route::get('form','FormController@index');
    Route::post('form','FormController@store');
    Route::get('photo','HomeController@photo');
//    Route::get('register', 'RegisterController@index');
});
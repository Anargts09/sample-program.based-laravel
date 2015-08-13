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
    return view('home');
});

Route::get('react-sample', function () {
    return view('sample.react');
});
Route::get('riot-sample', function () {
    return view('sample.riot');
});

Route::get('redis', 'Sample\SampleController@index');
Route::get('react', 'Sample\SampleController@react');
Route::get('riot', 'Sample\SampleController@riot');

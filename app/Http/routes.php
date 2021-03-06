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

Route::get('riot/riot', function () {
    return view('riot.index');
});
Route::get('riot-api', 'Sample\RiotController@riotApi');
Route::get('riot-api2', 'Sample\RiotController@riotApi2');
Route::get('riot-route', [
    'uses' => 'Sample\RiotController@riotRoute',
    'as'   => 'riot-route-name',
]);

Route::get('riot-html', [
    'uses' => 'Riot\RiotHtmlController@index',
    'as'   => 'riot-html',
]);

// API用
Route::group(['prefix' => 'api'], function() {
    Route::resource('riot-user', 'Api\RiotUserController');
    Route::resource('riot2', 'Api\Riot2Controller');
    Route::resource('riot-html', 'Api\RiotHtmlController');
});

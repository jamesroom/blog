<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Route::get('/graphic', 'ListController@graphic');
Route::get('/illustration', 'ListController@illustration');
Route::get('/web', 'ListController@web');
Route::get('/site', 'ListController@site');
Route::get('/aboutme', 'HomeController@aboutme');



Route::get('/graphic/{name}', 'DetailController@index');
Route::get('/illustration/{name}', 'DetailController@index');
Route::get('/web/{name}', 'DetailController@index');
Route::get('/site/{name}', 'DetailController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

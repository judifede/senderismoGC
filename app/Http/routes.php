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

Route::get('logout','AuthController@logout');
Route::get('auth/confirm/email/{email}/confirm_code/{confirm_code}', 'UserController@confirmRegister');
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
    Route::auth();
    Route::get('/','FrontController@index');
    Route::get('/sendero','FrontController@sendero');
    Route::get('/estado','FrontController@estado');
    Route::get('/normativa','FrontController@normativa');
    Route::get('/evento','FrontController@evento');
    Route::get('/comunidad','FrontController@comunidad');
    Route::get('/multimedia','FrontController@multimedia');
    Route::resource('forum','ForumController');
    Route::post('forum/create','ForumController@create');
});

/*Route::group(['middleware' => 'web'], function () {
    Route::auth();
    /*Route::get('/home', 'HomeController@index');
});*/

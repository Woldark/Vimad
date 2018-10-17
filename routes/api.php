<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'API'], function () {
    Route::post('/login', 'API\UserController@login');
    Route::post('/register', 'API\UserController@register');
    Route::post('/user_index', 'API\UserController@index');
    Route::post('/user_show', 'API\UserController@show');

    Route::post('/c_index', 'API\C_contentController@index');
    Route::post('/c_show', 'API\C_contentController@show');

    Route::post('/n_index', 'API\N_contentController@index');
    Route::post('/n_show', 'API\N_contentController@show');

    Route::post('/a_index', 'API\A_contentController@index');
    Route::post('/a_show', 'API\A_contentController@show');
});

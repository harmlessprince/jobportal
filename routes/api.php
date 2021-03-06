<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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


Route::prefix('auth')->group(function () {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    // Route::post('logout', 'LoginController@logout');
    
    // Route::get('refresh', 'AuthController@refresh');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('/user', 'AuthController@user');
       
    });
});


//users
Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');

//isSuperAdmin isStudent


<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
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


URL::forceSchema('https');

Route::get('/{any?}', function (){
    return view('master');
})->where('any', '^(?!api\/)[\/\w\.-]*');


Auth::routes([
    'register' => false, // Registration Routes...
    // 'reset' => false, // Password Reset Routes...
    // 'verify' => false, // Email Verification Routes...
    'login' => false, 
]);

// Route::get('/home', 'HomeController@index')->name('home');

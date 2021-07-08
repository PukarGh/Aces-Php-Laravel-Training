<?php

use Illuminate\Support\Facades\Route;

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

// Facade
Route::get('contact', function () {
    return view('contact');
});

Route::get('about-us', function () {
    echo 'About Us Page';
});

Route::get('user-list', 'App\Http\Controllers\UserController@list');
Route::get('user-details', 'App\Http\Controllers\UserController@details');


Route::get('form', 'App\Http\Controllers\FormController@displayForm');
Route::post('form-submit', 'App\Http\Controllers\FormController@saveForm');





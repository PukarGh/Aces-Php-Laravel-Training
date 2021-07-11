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

Route::get('event', 'App\Http\Controllers\EventController@index')->name('event.index');
Route::get('event/create', function (){
    return view('event.create');
})->middleware('auth');
Route::post('event/save', 'App\Http\Controllers\EventController@store')
    ->name('event.save')
    ->middleware('auth');
// Route Parameter
// Route Model Binding
Route::get('event/{event}/edit', 'App\Http\Controllers\EventController@edit')->name('event.edit');
Route::put('event/{event}/update', 'App\Http\Controllers\EventController@update')->name('event.update');
Route::delete('event/{event}', 'App\Http\Controllers\EventController@delete')->name('event.delete');


// Participant related routes
Route::post('respond/{event}', 'App\Http\Controllers\ParticipantController@respond')->name('event.respond');




// ----------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/', 'ContactController');
Route::get('/', 'ContactController@index')->name('index');
Route::post('/', 'ContactController@store')->name('store');
Route::delete('/delete/{id}','ContactController@destroy')->name('destroy');
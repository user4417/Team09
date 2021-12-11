<?php

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
use App\Http\Controllers\UserController;

Route::resource('villagers', 'VillagersController');
Route::resource('classes', 'ClassesController');

Route::post('classes/{id}', 'ClassesController@show');
Route::post('villagers/{id}', 'VillagersController@show');



Route::get('/', function () {
    return view('welcome');
});

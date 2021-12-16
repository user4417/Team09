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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VillagersController;
use App\Http\Controllers\ClassesController;

Route::resource('villagers', 'VillagersController');
Route::resource('classes', 'ClassesController');

/*Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@create');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@create');
Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@store');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@store');
Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@update');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@update');
Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@destroy');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@destroy');*/



Route::get('/', function () {
    return view('welcome');
});

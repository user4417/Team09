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

Route::get('classes/easy','ClassesController@easy')->name('classes.easy');
Route::get('classes/hard','ClassesController@hard')->name('classes.hard');

Route::get('villagers/lead1','VillagersController@lead1')->name('villagers.lead1');
Route::get('villagers/lead2','VillagersController@lead2')->name('villagers.lead2');
Route::get('villagers/lead3','VillagersController@lead3')->name('villagers.lead3');

Route::resource('villagers', 'VillagersController');
Route::resource('classes', 'ClassesController');

/*Route::get('villager/mech1',['VillagersController','mech'])->name('villager.mech1');
Route::get('villager/mech2',['VillagersController','mech2'])->name('villager.mech2');
Route::get('villager/mech3',['VillagersController','mech3'])->name('villager.mech3');
Route::get('villager/mech3',['VillagersController','mech4'])->name('villager.mech4');*/

/*Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@create');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@create');
Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@store');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@store');
Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@update');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@update');
Route::post('classes/{id}', 'App\Http\Controllers\ClassesController@destroy');
Route::post('villagers/{id}', 'App\Http\Controllers\VillagersController@destroy');*/



Route::get('/', function () {
    return redirect('villagers');
});

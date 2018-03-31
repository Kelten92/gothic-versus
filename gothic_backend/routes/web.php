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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/message', 'MessageController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fight', 'HomeController@fight');
Route::get('/test', 'HomeController@test');



Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/expedition', 'GameEngine\ExpeditionController@index');
    Route::post('/expedition', 'GameEngine\ExpeditionController@new');
});
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

Route::resource('npcs', 'NpcsController');

Route::resource('armors', 'ArmorsController');

Route::get('weapons', 'WeaponsController@index');

Route::get('weapons-one-handed', 'WeaponsController@OneHanded');
Route::get('weapons-two-handed', 'WeaponsController@TwoHanded');
Route::get('weapons-bows', 'WeaponsController@Bows');
Route::get('weapons-crossbows', 'WeaponsController@Crossbows');
Route::get('weapons-spells', 'WeaponsController@Spells');

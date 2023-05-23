<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Setting\Http\Controllers\SettingController;
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

Route::middleware('auth:api')->get('/setting', function (Request $request) {
    return $request->user();
});
Route::post('/setting/newTab', [SettingController::class, 'newTab']);
Route::post('/setting/newMenu', [SettingController::class, 'newMenu']);
Route::delete('/setting/deleteTab/{id}', [SettingController::class, 'deleteTab']);
Route::put('/setting/updateTab/{id}', [SettingController::class, 'updateTab']);
Route::post('/setting/newSubMenu', [SettingController::class, 'newSubMenu']);

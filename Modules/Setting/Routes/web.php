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

Route::prefix('setting')->group(function () {
    Route::get('/', 'SettingController@index')->name('setting');
    Route::post('/newMenu', 'SettingController@newMenu');
    Route::post('/newTab', 'SettingController@newTab');
    Route::delete('/deleteTab/{id}', 'SettingController@deleteTab');
    Route::put('/updateTab', 'SettingController@updateTab')->name('updateTab');
    Route::post('/newSubMenu', 'SettingController@newSubMenu');
});

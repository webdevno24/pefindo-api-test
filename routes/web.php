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
    return '<h1>PBK-KBOOST</h1>';
})->name('home');
// Route::post('smartSearchCompany', 'PefindoController@smartSearchCompany')->name('smartSearchCompany');
// Route::get('customReport', 'PefindoController@CustomReport')->name('customReport');

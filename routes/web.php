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
    return view('All_views.welcome');
});

Route::get('submit','team@submit');
Route::post('add','team@add');
Route::get('add','team@Viewinfo');
Route::get('add/{id}','team@delete');
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

Route::get('/', function () {
    return view('index');
});

Route::get('/uranai/fortune', 'TopController@fortune'); // \App\Http\Controllers を省略
// Route::get('/uranai/fortune', 'App\Http\Controllers\TopController@fortune');

Route::get('/uranai/omikuji', 'TopController@omikuji');
// Route::get('/uranai/omikuji', 'App\Http\Controllers\TopController@omikuji');

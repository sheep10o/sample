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
    // return view('welcome');
    return view('index');
});

Route::get('/db/list', 'DbController@list');
Route::get('/db/insert', 'DbController@insert');
Route::post('/db/store', 'DbController@store');
// Route::get('/db/keyword', 'keyword');
 Route::get('db/search', 'DbController@search');

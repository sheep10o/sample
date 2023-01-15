<?php

use App\Http\Controllers\DbController;
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

Route::get('/db/list', 'DbController@list'); //全件表示
Route::get('/db/insert', 'DbController@insert'); //登録用フォーム
Route::post('/db/store', 'DbController@store'); //新規登録
Route::get('/db/editId', 'DbController@editId'); //更新用フォーム、id入力
Route::post('/db/editData', 'DbController@editData'); //更新用フォーム(データ入力)
Route::post('/db/update', 'DbController@update'); //更新
Route::get('/db/eraseId', 'DbController@eraseId'); //削除用フォーム、id入力
Route::post('db/eraseData', 'DbController@eraseData'); //削除用フォーム、確認
Route::post('/db/delete', 'DbController@delete'); //削除
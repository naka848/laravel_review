<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

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

// function () 
// 引数なしの関数（無名関数、クロージャ）

Route::get('/', function () {

    // 'welcome' = welcome.blade.php or welcome.php
    return view('welcome');
});

// viewはresponseインスタンスを返す
// ※テンプレートのソースコードの内容が返されているわけではない
// Route::get('hello', function () {
//     return view('hello.index');
// });

Route::get('hello',[HelloController::class,'index']);
Route::post('hello',[HelloController::class,'post']);



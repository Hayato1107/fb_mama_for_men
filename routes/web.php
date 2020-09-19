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
//獲得用
Route::get('app', function () {
    return view('fb.check'); //提出用
    // return view('fb.mama'); //獲得用
});

// m訴求 - OS識別x遷移
Route::get('os', 'AdController@os');

//確認用
Route::get('cccheck', function () {
    return view('fb.mama'); //獲得用
});

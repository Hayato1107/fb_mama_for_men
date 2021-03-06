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
Route::get('ins1', function () {
    return view('fb.check'); //提出用
    // return view('fb.pp'); //パパ活訴求 - 獲得用(3)
    
    // return view('fb.newLive'); //獲得用(3)
    // return view('fb.job'); //獲得用(2)
    // return view('fb.mama'); //獲得用
});

//確認用
Route::get('cccheck', function () {
    return view('fb.pp'); //パパ活訴求 - 獲得用(3)
    
    // return view('fb.newcl'); //獲得用(3) - チャトレLP作ろうとして一旦停止
    // return view('fb.newLive'); //獲得用(3)
    
    // return view('fb.job'); //獲得用(2)
    
    // return view('fb.mama'); //獲得用
});

// m訴求 - OS識別x遷移 for チャトレ
Route::get('info', 'AdController@info');

// m訴求 - OS識別x遷移 for パパ活
Route::get('os', 'AdController@os');

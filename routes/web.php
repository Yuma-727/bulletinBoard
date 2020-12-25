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
});

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/mypage', function () {
    return view('mypage');
})->name('mypage');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/talk', function () {
    return view('talk');
})->name('talk');

Route::get('/show', function(){
    return view('show');
})->name('show');

Route::get('/posting', function(){
    return view('posting');
})->name('posting');

Route::get('/check', function(){
    return view('check');
})->name('check');

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

Route::get('/', 'PagesController@index');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/lamanjualan', function () {
    return view('lamanjualan');
});

Route::get('/password', function () {  //inituh buat forgot password
    return view('password');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/display', function () {
    return view('display');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/gantipassword', function () { //buat ganti kata sandi waktu lupa password
    return view('gantipassword');
});

Route::get('/upload', function () {  //inituh buat forgot password
    return view('upload');
});

Route::get('/beli', function () {
    return view('beli');
});

Route::get('/editbuku', function () {
    return view('editbuku');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/masuk/loginsuccess', function () {
    return view('pages.loggedin');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/daftar', function () {
    return view('pages.signup');
});

Route::get('begin_password_reset', function () {
    return view('pages.password');
});

Route::get('/verify', function () {
    return view('pages.forgot');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts', 'PostsController');

Route::get('/upload', 'UploadController@upload');
Route::post('/lamanjualan', 'UploadController@proses_upload');

Route::get('/lamanjualan', 'ItemController@index');
Route::get('/beli', 'ItemController@beli');

Route::get('editprofile/edit/{id}', 'UserController@edit');
Route::put('/edit/{id}', 'UserController@update');

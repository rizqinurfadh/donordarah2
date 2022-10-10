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

Route::get('/login', function () {
    return view('login/login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/cause', function () {
    return view('cause');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/admin', function () {
    return view('admin\pages\counter\dashboardcount.php');
});


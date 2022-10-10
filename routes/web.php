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
    return view('login');
});

Route::get('/index', function () {
    return view('index');
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

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/Profile', function () {
    return view('profile');
});

Route::get('/Profile1', function () {
    return view('profilee');
});

Route::get('/single-blog1', function () {
    return view('single-blog1');
});

Route::get('/single-blog2', function () {
    return view('single-blog2');
});

Route::get('/single-blog3', function () {
    return view('single-blog3');
});

Route::get('/single-blog4', function () {
    return view('single-blog4');
});

Route::get('/home', function () {
    return view('admin/user');
});
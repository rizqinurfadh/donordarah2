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

Route::get('/stok', function () {
    return view('stok');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/cause_details', function () {
    return view('cause_details'); 
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

Route::get('/addblog', function () {
    return view('admin/addblog');
});

Route::get('/viewblog', function () {
    return view('admin/viewblog');
});

Route::get('/removeblog', function () {
    return view('admin/removeblog');
});

Route::get('/editblog', function () {
    return view('admin/editblog');
});

Route::get('/addstok', function () {
    return view('admin/addstok');
});

Route::get('/viewstok', function () {
    return view('admin/viewstok');
});

Route::get('/removestok', function () {
    return view('admin/removestok');
});

Route::get('/editstok', function () {
    return view('admin/editstok');
});

Route::get('/addlokasi', function () {
    return view('admin/addlokasi');
});

Route::get('/viewlokasi', function () {
    return view('admin/viewlokasi');
});

Route::get('/removelokasi', function () {
    return view('admin/removelokasi');
});

Route::get('/editlokasi', function () {
    return view('admin/editlokasi');
});


Route::get('/adddetail', function () {
    return view('admin/adddetail');
});

Route::get('/viewdetail', function () {
    return view('admin/viewdetail');
});

Route::get('/removedetail', function () {
    return view('admin/removedetail');
});

Route::get('/editdetail', function () {
    return view('admin/editdetail');
});

Route::get('/brawijaya', function () {
    return view('lokasi\brawijaya');
});

Route::get('/bunda', function () {
    return view('lokasi\bunda');
});

Route::get('/darmahusada', function () {
    return view('lokasi\darmahusada');
});

Route::get('/rsua', function () {
    return view('lokasi\rsua');
});

Route::get('/sutomo', function () {
    return view('lokasi\sutomo');
});

Route::get('suwandi', function () {
    return view('lokasi\suwandi');
});
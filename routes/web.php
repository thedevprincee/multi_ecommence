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
    return view('backend.auth.login');
});


Route::get('/auth/login', function () {
    return view('backend.auth.login', [
        'title'=>'login page']
        );
});

Route::get('/auth/signup', function () {
    return view('backend.auth.register', [
        'title'=>'login page']
        );
});

Route::get('/auth/forgotpassword', function () {
    return view('backend.auth.forgotpassword', [
        'title'=>'login page']
        );
});

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
});



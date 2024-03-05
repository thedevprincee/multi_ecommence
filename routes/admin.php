<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AdminController;





Route::prefix('admin')->name('admin')->group(function () {
    Route::get('/login', function () {
        return view('backend.pages.admin.auth.login');
    });

    
//    Route::middleware(['guest:admin'])->group(function(){
//        Route::view('/login', 'backend.pages.admin.login');
//    });

//    Route::middleware(['auth:admin'])->group(function(){
//        Route::view('/home', 'backend.admin.home')->name('home');
//    });

});

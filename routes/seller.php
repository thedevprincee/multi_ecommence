<?php

use Illuminate\Support\Facades\Route;




Route::get('/seller', function () {
    return 'Hello seller';
    //return view('backend.auth.login');
});
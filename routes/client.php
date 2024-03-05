<?php

use Illuminate\Support\Facades\Route;




Route::get('/client', function () {
    return 'Hello Client';
    //return view('backend.auth.login');
});
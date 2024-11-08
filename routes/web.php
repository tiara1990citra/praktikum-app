<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});

//route login admin dan kasir

Route::get('login',[AdminController::class,'login']);
Route::post('login',[AdminController::class,'cekLogin']);

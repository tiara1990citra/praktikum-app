<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Dashboard');
// });

//route login admin dan kasir

Route::get('login',[AdminController::class,'login'])->name('login');
Route::post('login',[AdminController::class,'cekLogin']);

//route yng di proteksi dengan middleware auth
Route::middleware("auth:admin")->group(function(){
    
});
Route::get('/',[AdminController::class,'index']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


//frontend
Route::get('/home',[
    HomeController::class,
    'home'
]);
Route::get('/',[
    HomeController::class,
    'home'
]);

//backend 

Route::get('/admin_login',[
    AdminController::class,
    'index'
]);

Route::get('/admin_dashboard',[
    AdminController::class,
    'show_admin_dashboard'
]);

Route::get('/logout',[
    AdminController::class,
    'logout'
]);

Route::post('/admin_dashboard',[
    AdminController::class,
    'dashboard'
]);



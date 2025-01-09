<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;

//frontend
Route::get('/',[HomeController::class,'home']);
Route::get('/trang-chu',[HomeController::class,'home']);

//backend
Route::get('/admin',[AdminController::class,'index']);

Route::get('/dashboard',[AdminController::class,'show_dashboard']);

Route::get('/logout',[AdminController::class,'logout']);

Route::post('/admin-dashboard',[AdminController::class,'dashboard']);

//CategoryProduct
Route::get('/add-category-product',[CategoryProduct::class,'add_category_product']);

Route::get('/all-category-product',[CategoryProduct::class,'all_category_product']);

<?php

use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\brand;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/logout' , [])
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// category routes
Route::middleware('auth')->prefix('/backend/category')->controller(CategoryController::class)->name('category.')->group(function () {
    Route::get('/{id?}', 'index')->name('index');
    Route::post('/store-or-update{id?}', 'storeOrUpdate')->name('store');
    Route::get('/delete/{id}', 'delete')->name('delete');
});


// brands routes
Route::middleware('auth')->prefix('/backend/brand')->controller(BrandController::class)->name('brand.')->group(function () {
    Route::get('/{id?}', 'index')->name('index');
    Route::post('/store-or-update{id?}', 'storeOrUpdate')->name('store');
    Route::get('/delete/{id}', 'delete')->name('delete');
});


// profile routes//

Route::get('/profile' , [DashboardController::class, 'profile'])->name('dashboard.profile')->middleware('auth');
// Route::get('/profile/editProfile' , [DashboardController::class, 'editProfile'])->name('dashboard.profile.edit')->middleware('auth');
Route::put('/profile/update' , [DashboardController::class, 'updateProfile'])->name('dashboard.profile.update')->middleware('auth');


    

// product routes

Route::middleware('auth')->prefix('/backend/product')->controller(ProductController::class)->name('product.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('store{id?}', 'store')->name('store');
    Route::get('edit{id?}', 'edit')->name('edit');
    Route::post('update', 'update')->name('update');
});
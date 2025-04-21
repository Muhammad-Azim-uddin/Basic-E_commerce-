<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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


    
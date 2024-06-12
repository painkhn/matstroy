<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile')->middleware(['auth', 'verified']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware([IsAdmin::class]);
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
Route::post('/admin/product/new', [AdminController::class, 'new_product'])->name('NewProduct')->middleware([IsAdmin::class]);
Route::post('/search', [HomeController::class, 'search'])->name('Search');  

require __DIR__.'/auth.php';

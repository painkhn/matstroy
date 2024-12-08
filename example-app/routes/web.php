<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile')->middleware(['auth', 'verified']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware([IsAdmin::class]);
Route::get('/exel', [AdminController::class, 'exel'])->name('exel')->middleware([IsAdmin::class]);
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
Route::post('/admin/product/new', [AdminController::class, 'new_product'])->name('NewProduct')->middleware([IsAdmin::class]);
Route::post('/search', [HomeController::class, 'search'])->name('Search');
Route::get('/basket/{tovar_id}', [BasketController::class, 'add_basket'])->name('AddBasket')->middleware(['auth']);
Route::get('/basket/delete/{bakset_id}', [BasketController::class, 'del_basket'])->name('DelBasket')->middleware(['auth']);
Route::get('/basket', [BasketController::class, 'basket_open'])->name('Basket')->middleware(['auth']);
Route::get('/product/{tovar_id}', [HomeController::class, 'product_open'])->name('Product');
Route::get('/buy/{tovar_id}', [BasketController::class, 'buy_product'])->name('BuyProduct')->middleware(['auth']);
Route::get('/api/new-users', [AdminController::class, 'getNewUsers']);

require __DIR__.'/auth.php';

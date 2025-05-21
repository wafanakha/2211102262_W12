<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.detail');
Auth::routes();

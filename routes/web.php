<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

Route::prefix('/')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');

    // Register User
    Route::get('/register', [LoginController::class, 'registerForm'])->name('register');
    Route::post('/store', [LoginController::class, 'store'])->name('store');

    // Login User
    Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
    Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/category', [AdminController::class, 'showCategory'])->name('admin.showCategory');
    Route::get('/createCategory', [AdminController::class, 'createCategory'])->name('admin.createCategory');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('category/{categories}/editCategory', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::match(['get', 'post'], '/{categories}/update', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/delete{categories}', [AdminController::class, 'destroy'])->name('admin.destroy');

    // CRUD Product
    Route::get('/product', [productController::class, 'showProduct'])->name('admin.showProduct');
    Route::get('/createProduct', [productController::class, 'createProduct'])->name('admin.createProduct');
    Route::post('/storeProduct', [productController::class, 'storeProduct'])->name('admin.storeProduct');
    Route::get('product/{id}/editProduct', [productController::class, 'editProduct'])->name('admin.editProduct');
    Route::match(['get', 'post'], 'product/{id}/updateProduct', [productController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::delete('product/{id}/destroyProduct', [productController::class, 'destroyProduct'])->name('admin.destroyProduct');
});

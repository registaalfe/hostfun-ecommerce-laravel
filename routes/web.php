<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserPaymentController;
use App\Http\Controllers\TransactionsController;

Route::prefix('/')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');

    // Register User
    Route::get('/register', [LoginController::class, 'registerForm'])->name('register')->middleware('guest');
    Route::post('/store', [LoginController::class, 'store'])->name('store');

    // Login User
    Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
    Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    // Dashboard User
    Route::middleware('auth')->group(function () {
        Route::get('/hosting', [CheckoutController::class, 'index'])->name('hosting');
        Route::get('product/{id}/detailProduct', [CheckoutController::class, 'show'])->name('detailProduct');
        Route::post('/calculationSubtotal', [CheckoutController::class, 'calculationSubtotal'])->name('calculationSubtotal');
        Route::post('/checkoutProduct', [CheckoutController::class, 'store'])->name('checkoutProduct');
        Route::get('transaction/{id}/payment', [UserPaymentController::class, 'index'])->name('payment');
        Route::post('paymentStore', [UserPaymentController::class, 'store'])->name('paymentStore');
        Route::get('/finished', [UserPaymentController::class, 'finishpayment'])->name('finishpayment');
    });
});

Route::prefix('admin')->middleware('IsAdmin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/category', [AdminController::class, 'showCategory'])->name('admin.showCategory');
    Route::get('/createCategory', [AdminController::class, 'createCategory'])->name('admin.createCategory');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('category/{categories}/editCategory', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::match(['get', 'post'], '/{categories}/update', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/delete{categories}', [AdminController::class, 'destroy'])->name('admin.destroy');

    // CRUD Product
    Route::get('/product', [ProductController::class, 'showProduct'])->name('admin.showProduct');
    Route::get('/createProduct', [ProductController::class, 'createProduct'])->name('admin.createProduct');
    Route::post('/storeProduct', [ProductController::class, 'storeProduct'])->name('admin.storeProduct');
    Route::get('product/{id}/editProduct', [ProductController::class, 'editProduct'])->name('admin.editProduct');
    Route::match(['get', 'post'], 'product/{id}/updateProduct', [ProductController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::delete('product/{id}/destroyProduct', [ProductController::class, 'destroyProduct'])->name('admin.destroyProduct');

    // Transactions
    Route::get('/transactions', [TransactionsController::class, 'index'])->name('admin.showTransactions');
});

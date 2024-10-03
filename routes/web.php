<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;

Route::get('/', [userController::class, 'index'])->name('users.index');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/category', [adminController::class, 'showCategory'])->name('admin.showCategory');
    Route::get('/createCategory', [adminController::class, 'createCategory'])->name('admin.createCategory');
    Route::post('/store', [adminController::class, 'store'])->name('admin.store');
    Route::get('category/{categories}/editCategory', [adminController::class, 'editCategory'])->name('admin.editCategory');
    Route::match(['get', 'post'], '/{categories}/update', [adminController::class, 'update'])->name('admin.update');
    Route::delete('/delete{categories}', [adminController::class, 'destroy'])->name('admin.destroy');

    // CRUD Product
    Route::get('/product', [productController::class, 'showProduct'])->name('admin.showProduct');
    Route::get('/createProduct', [productController::class, 'createProduct'])->name('admin.createProduct');
    Route::post('/storeProduct', [productController::class, 'storeProduct'])->name('admin.storeProduct');
    Route::get('product/{id}/editProduct', [productController::class, 'editProduct'])->name('admin.editProduct');
    Route::match(['get', 'post'], 'product/{id}/updateProduct', [productController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::delete('product/{id}/destroyProduct', [productController::class, 'destroyProduct'])->name('admin.destroyProduct');
});

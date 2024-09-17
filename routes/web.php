<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;

Route::get('/', [userController::class, 'index'])->name('users.index');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/category', [adminController::class, 'showCategory'])->name('admin.showCategory');
    Route::get('/createCategory', [adminController::class, 'createCategory'])->name('admin.createCategory');
    Route::post('/store', [adminController::class, 'store'])->name('admin.store');
    Route::get('/{categories}/editCategory', [adminController::class, 'editCategory'])->name('admin.editCategory');
    Route::match(['get', 'post'], '/{categories}/update', [adminController::class, 'update'])->name('admin.update');
    Route::delete('/delete{categories}', [adminController::class, 'destroy'])->name('admin.destroy');
});

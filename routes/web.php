<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;

Route::get('/', [userController::class, 'index'])->name('users.index');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
});

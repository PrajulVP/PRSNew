<?php

use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\AdminAuthController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin_web')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
    });
});

<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Auth\LoginController as AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name('admin.')->group(function () {
    Route::get("login", [AuthController::class, 'index'])->name('login');

    Route::post("login", [AuthController::class, 'store'])->name('login.auth');

    Route::get('signout', [DashboardController::class, 'signout'])->name('signout');


    Route::middleware('auth:admin')->group(function () {
        Route::get('', DashboardController::class)->name('index');

        Route::resource("products", ProductController::class);
    });
});


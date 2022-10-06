<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Auth\LoginController as AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name('admin.')->group(function () {
    Route::get("login", [AuthController::class, 'index']);

    Route::post("login", [AuthController::class, 'store'])->name('login.auth');

    Route::middleware('auth:admin')->group(function () {
        Route::get('', function () {
            return view('admin.index');
        })->name('index');

        Route::resource("products", ProductController::class);
    });
});


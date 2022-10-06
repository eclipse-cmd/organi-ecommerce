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

        Route::get('products', [ProductController::class, 'index'])->name('products.index');

        Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

        Route::post('products/create', [ProductController::class, 'store'])->name('products.store');

        Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

        Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

        Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');

        Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    });
});


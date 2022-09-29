<?php

use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function () {
    // Route::middleware("auth:admin")->group(function() {
        Route::get("", function() {
            return view("admin.index");
        });
    // });
});
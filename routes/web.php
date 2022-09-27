<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name('index');
    Route::get('shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('pages', [HomeController::class, 'pages'])->name('pages');
    Route::get('blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
});

Route::middleware("auth")->group(function () {
    Route::get('change-password', [UserController::class, 'changePassword'])->name('change-password');
    Route::post('change-password', [UserController::class, 'updatePassword'])->name('update-password');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

});

Route::middleware("guest")->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');

    Route::post('register', [RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'index'])->name('login');

    Route::post('login', [LoginController::class, 'store']);

    Route::get('forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');

    Route::post('forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot-password.request');

    Route::get('reset-password/{token}', function (Request $request) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');

    Route::post('reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    })->name('password.update');
});

//Route::get('mail', function() {
//    return view("mail.forgot-password")->with([
//        'data' => [
//            'firstname' => 'emma',
//            'lastname' => 'toba',
//            'link' => config('app.url') . '/reset-password/' . 'ororororoasodjnfpisldkjnfolsdf'
//        ]
//    ]);
//});

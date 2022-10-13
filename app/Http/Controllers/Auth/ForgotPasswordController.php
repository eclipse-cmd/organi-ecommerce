<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Ramsey\Uuid\Generator\RandomBytesGenerator;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword(Request $request)
    {
        //Validate user email sent
        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        //Find user with the email
        $email = $validated['email'];
        $user = User::where("email", $email)->first();

        //Check if user exist in the DB
        if (!$user) {
            return back()->withErrors(["email" => "User not registered with us"]);
        }

        //Get new token for user
        $token = Str::random(50);

        //Save token in the DB
        $user->remember_token = $token;
        $user->save();

        //Send user the email with the token
        Mail::to($user->email)->queue(new ForgotPassword([
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'link' => config('app.url') . '/reset-password/' . $token
        ]));

//        return redirect()->back(true); //FIX THIS
        return redirect()->back('success', 'New Password has been reset');
    }
}

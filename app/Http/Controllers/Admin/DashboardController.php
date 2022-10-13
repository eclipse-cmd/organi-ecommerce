<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $admin = Auth::guard('admin')->user();

        return view('admin.index')->with(compact('admin'));
    }

    public function signout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (request('login') == 'admin' && request('password') == env('IRONDZE_PASSWORD')) {
            session(['isAdmin' => 'true']);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back();
    }
    public function form()
    {
        return view('admin.login');
    }

    public function exit(Request $request)
    {
        $request->session()->forget('isAdmin');
        return redirect()->route('admin.login.form');
    }
}

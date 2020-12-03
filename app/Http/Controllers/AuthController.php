<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function adminlogin()
    {
        return view('admin.login');
    }
    public function postloginadmin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password', 'tipe_user'))) {
            return redirect('/database');
        }
        return redirect('/adminlogin');
    }
    public function logoutadmin()
    {
        Auth::logout();
        return redirect('/adminlogin');
    }

    public function userlogin()
    {
        return view('user.login');
    }
    public function postloginuser(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password', 'tipe_user'))) {
            return redirect('/index');
        }
        return redirect('/userlogin');
    }
    public function logoutuser()
    {
        Auth::logout();
        return redirect('/userlogin');
    }
}

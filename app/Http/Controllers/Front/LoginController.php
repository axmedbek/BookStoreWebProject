<?php

namespace App\Http\Controllers\Front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.login');
    }

    public function loginProcess(Request $request)
    {
        if (Auth::attempt(['email' => $request->get('email') , 'password' => $request->get('password')])
        || Auth::attempt(['username' => $request->get('email') , 'password' => $request->get('password')])) {
            request()->session()->regenerate();
            return redirect()->intended('/');
        } else {
            $errors = ['email' => 'Girisde xeta var'];
            return back()->withErrors($errors);
        }

    }
}

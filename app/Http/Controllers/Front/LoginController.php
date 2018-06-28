<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           // request()->session()->regenerate();
            return redirect()->intended('/');
        } else {
            $errors = ['email' => 'Girisde xeta var'];
            return back()->withErrors($errors);
        }

    }
}

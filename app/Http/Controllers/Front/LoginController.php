<?php

namespace App\Http\Controllers\Front;

use App\User;
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
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()){

            return back()->withErrors($validator->errors());
        }
        else{
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
}

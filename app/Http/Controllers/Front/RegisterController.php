<?php

namespace App\Http\Controllers\Front;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('front.register');
    }

    public function registerProcess(Request $request){
        $validator = Validator::make($request->all(),[

        ]);

        if ($validator->fails()){

        }
        else{
            $user = new User();
            $user->username = $request->get('username');
            $user->name = $request->get('name');
            $user->surname = $request->get('lastname');
            $user->email = $request->get('email');
            $user->birthday = Carbon::now();
            $user->gender = $request->get('gender');
            $user->mob_phone1 = $request->get('mobil_phone');
            $user->mob_phone2= $request->get('mobil_phone2');
            $user->zip_code = $request->get('zip_code');
            $user->address = $request->get('address');
            $user->city = $request->get('city');
            $user->activation_code = str_random(60);
            $user->password = Hash::make($request->get('password'));
            $user->save();
            Auth::login($user,true);
            return redirect()->route('login_page');
        }
    }

}

<?php

namespace App\Http\Controllers\Front;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('front.register');
    }

    public function registerProcess(Request $request){
        $validator = Validator::make($request->all(),[
            'username' => 'required|string|min:3|max:30|unique:users,username',
            'name' => 'required|string|max:60',
            'lastname' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'birthday' => 'required|date',
            'gender'=>'required|in:1,2',
            'address' => 'required|string',
            'mobil_phone' => 'required|string',
            'mobil_phone2' => 'string',
            'zip_code' => 'required|string',
            'city' => 'required|integer'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator->errors());
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
            $user->password = bcrypt($request->get('password'));
            $user->save();
            Auth::login($user);
            return redirect()->route('login');
        }
    }

}

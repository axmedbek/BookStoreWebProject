<?php

namespace App\Http\Controllers\Admin\Msk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index(){
        return view('admin.pages.msk.city');
    }
}

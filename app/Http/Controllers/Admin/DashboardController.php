<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function index($locale){
        App::setLocale($locale);
        return view('admin.pages.dashboard');
    }
}

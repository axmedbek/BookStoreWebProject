<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index($locale = 'az'){
       app()->setLocale($locale);
       return view('admin.pages.orders.orders');
    }
}

<?php

namespace App\Http\Controllers;

use App\MskCity;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index(Request $request){

        $results = [];

        if ($request->has('what') && $request->get('what') == 'get_cities'){
            if ($request->get('q') != ""){
                $cities = MskCity::where('name','like','%'.$request->get('q').'%')->get();
            }
            else{
                $cities = MskCity::all();

            }
            foreach ($cities as $city){
                $results[] = ['id' => $city->id,'text' => $city->name];
            }
        }

        return response()->json(['results' => $results]);
    }
}

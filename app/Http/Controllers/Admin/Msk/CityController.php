<?php

namespace App\Http\Controllers\Admin\Msk;

use App\MskCity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function index(){
        $cities = MskCity::all();
        return view('admin.pages.msk.city',compact('cities'));
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer',
            'name' => 'required|string|max:30|unique:msk_cities,name,'.$request->get('id').',id'
        ]);

        if ($validator->fails()){
            $errors = $validator->errors();
            return response()->json(['status' => 'error' ,'errors' => $errors]);
        }
        else{
            if ($request->get('id') == 0){
                $cityObj = new MskCity();
            }
            else{
                $cityObj = MskCity::find($request->get('id'));
            }
            $cityObj->name = $request->get('name');
            $cityObj->save();

            return response()->json(['status'=>'ok','data' => $cityObj->toArray()]);
        }
    }

    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:msk_cities'
        ]);

        if ($validator->fails()){
            return response()->json(['status' => 'error','errors' => $validator->errors()]);
        }
        else{
            $cityObj = MskCity::find($request->get('id'));
            $cityObj->delete();
            return response()->json(['status' => 'ok']);
        }
    }
}

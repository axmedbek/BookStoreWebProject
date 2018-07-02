<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.pages.category.category',compact('categories'));
    }

    public function saveCategory(Request $request){

        $validator = Validator::make($request->all(),[

        ]);

        if ($validator->fails()){

        }
        else{

            if ($request->get('id') == 0){
                $categoryObj = new Category();
            }
            else{
                $categoryObj = Category::find($request->get('id'));
            }

            $categoryObj->name = $request->get('name');
            $categoryObj->icon = $request->get('icon');
            $categoryObj->sira = $request->get('sira');
            $categoryObj->save();

            return response()->json(['status' => 'ok' ,'data' => $categoryObj->toArray()]);
        }
    }
}

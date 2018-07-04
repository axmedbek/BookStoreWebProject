<?php

namespace App\Http\Controllers\Admin\Msk;

use App\BookLang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookLangController extends Controller
{
    public function index(){
        $bookLangs = BookLang::all();
        return view('admin.pages.msk.book_langs',compact('bookLangs'));
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer',
            'name' => 'required|string|max:30|unique:book_langs,name,'.$request->get('id').',id'
        ]);

        if ($validator->fails()){
            $errors = $validator->errors();
            return response()->json(['status' => 'error' ,'errors' => $errors]);
        }
        else{
            if ($request->get('id') == 0){
                $bookLangObj = new BookLang();
            }
            else{
                $bookLangObj = BookLang::find($request->get('id'));
            }
            $bookLangObj->name = $request->get('name');
            $bookLangObj->save();

            return response()->json(['status'=>'ok','data' => $bookLangObj->toArray()]);
        }
    }

    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:book_langs'
        ]);

        if ($validator->fails()){
            return response()->json(['status' => 'error','errors' => $validator->errors()]);
        }
        else{
            $bookLangObj = BookLang::find($request->get('id'));
            $bookLangObj->delete();
            return response()->json(['status' => 'ok']);
        }
    }
}

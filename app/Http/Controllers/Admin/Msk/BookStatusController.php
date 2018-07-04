<?php

namespace App\Http\Controllers\Admin\Msk;

use App\BookStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookStatusController extends Controller
{
    public function index(){
        $bookStatuses = BookStatus::all();
        return view('admin.pages.msk.book_statuses',compact('bookStatuses'));
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer',
            'name' => 'required|string|max:30|unique:book_statuses,name,'.$request->get('id').',id'
        ]);

        if ($validator->fails()){
            $errors = $validator->errors();
            return response()->json(['status' => 'error' ,'errors' => $errors]);
        }
        else{
            if ($request->get('id') == 0){
                $bookStatusObj = new BookStatus();
            }
            else{
                $bookStatusObj = BookStatus::find($request->get('id'));
            }
            $bookStatusObj->name = $request->get('name');
            $bookStatusObj->save();

            return response()->json(['status'=>'ok','data' => $bookStatusObj->toArray()]);
        }
    }

    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:book_statuses'
        ]);

        if ($validator->fails()){
            return response()->json(['status' => 'error','errors' => $validator->errors()]);
        }
        else{
            $bookStatusObj = BookStatus::find($request->get('id'));
            $bookStatusObj->delete();
            return response()->json(['status' => 'ok']);
        }
    }
}

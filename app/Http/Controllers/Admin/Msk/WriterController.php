<?php

namespace App\Http\Controllers\Admin\Msk;

use App\Writer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class WriterController extends Controller
{
    public function index($locale = 'az'){
        app()->setLocale($locale);
        $writers = Writer::all();
        return view('admin.pages.msk.writers',compact('writers'));
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer',
            'name' => 'required|string|max:30|unique:writers,name,'.$request->get('id').',id'
        ]);

        if ($validator->fails()){
            $errors = $validator->errors();
            return response()->json(['status' => 'error' ,'errors' => $errors]);
        }
        else{
            if ($request->get('id') == 0){
                $writerObj = new Writer();
            }
            else{
                $writerObj = Writer::find($request->get('id'));
            }
            $writerObj->name = $request->get('name');
            $writerObj->save();

            return response()->json(['status'=>'ok','data' => $writerObj->toArray()]);
        }
    }

    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer|exists:writers'
        ]);

        if ($validator->fails()){
            return response()->json(['status' => 'error','errors' => $validator->errors()]);
        }
        else{
            $writerObj = Writer::find($request->get('id'));
            $writerObj->delete();
            return response()->json(['status' => 'ok']);
        }
    }
}

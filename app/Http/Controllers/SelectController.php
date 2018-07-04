<?php

namespace App\Http\Controllers;

use App\BookLang;
use App\BookStatus;
use App\Category;
use App\MskCity;
use App\Publisher;
use App\SubCategory;
use App\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectController extends Controller
{
    public function index(Request $request){

        $results = [];

        //get_cities
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

        //get_writers
        if ($request->has('what') && $request->get('what') == 'get_writers'){
            if ($request->get('q') != ""){
                $writers = Writer::where('name','like','%'.$request->get('q').'%')->get();
            }
            else{
                $writers = Writer::all();

            }
            foreach ($writers as $writer){
                $results[] = ['id' => $writer->id,'text' => $writer->name];
            }
        }

        //get_publisher
        if ($request->has('what') && $request->get('what') == 'get_publisher'){
            if ($request->get('q') != ""){
                $publishers = Publisher::where('name','like','%'.$request->get('q').'%')->get();
            }
            else{
                $publishers = Publisher::all();

            }
            foreach ($publishers as $publisher){
                $results[] = ['id' => $publisher->id,'text' => $publisher->name];
            }
        }

        //get_categories
        if ($request->has('what') && $request->get('what') == 'get_categories'){
            if ($request->get('q') != ""){
                $categories = Category::where('name','like','%'.$request->get('q').'%')->get();
            }
            else{
                $categories = Category::all();

            }
            foreach ($categories as $category){
                $results[] = ['id' => $category->id,'text' => $category->name];
            }
        }

        //get_sub_categories
        if ($request->has('what') && $request->get('what') == 'get_sub_categories'){

            $sub_categories = DB::table('sub_categories');

            if ($request->get('q') != ""){
                $sub_categories = $sub_categories->where('name','like','%'.$request->get('q').'%');
            }
            if ($request->has('category_id')){

                $sub_categories->where('category_id',$request->get('category_id'));
            }

            $sub_categories = $sub_categories->get();

            foreach ($sub_categories as $sub_category){
                $results[] = ['id' => $sub_category->id,'text' => $sub_category->name];
            }
        }

        //get_book_langs
        if ($request->has('what') && $request->get('what') == 'get_book_langs'){
            if ($request->get('q') != ""){
                $bookLangs = BookLang::where('name','like','%'.$request->get('q').'%')->get();
            }
            else{
                $bookLangs = BookLang::all();

            }
            foreach ($bookLangs as $bookLang){
                $results[] = ['id' => $bookLang->id,'text' => $bookLang->name];
            }
        }

        //get_book_statuses
        if ($request->has('what') && $request->get('what') == 'get_book_statuses'){
            if ($request->get('q') != ""){
                $bookStatuses = BookStatus::where('name','like','%'.$request->get('q').'%')->get();
            }
            else{
                $bookStatuses = BookStatus::all();

            }
            foreach ($bookStatuses as $bookStatus){
                $results[] = ['id' => $bookStatus->id,'text' => $bookStatus->name];
            }
        }


        return response()->json(['results' => $results]);
    }
}

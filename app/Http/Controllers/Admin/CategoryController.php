<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Category;
use App\SubCategory;
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
            $categoryObj->slug = str_slug($request->get('name'));
            $categoryObj->icon = $request->get('icon');
            $categoryObj->sira = $request->get('sira');
            $categoryObj->save();

            return response()->json(['status' => 'ok' ,'data' => $categoryObj->toArray()]);
        }
    }

    public function saveSubCategory(Request $request){

        $validator = Validator::make($request->all(),[

        ]);

        if ($validator->fails()){

        }
        else{

            if ($request->get('id') == 0){
                $subCategoryObj = new SubCategory();
            }
            else{
                $subCategoryObj = SubCategory::find($request->get('id'));
            }

            $subCategoryObj->name = $request->get('name');
            $subCategoryObj->slug = str_slug($request->get('name'));
            $subCategoryObj->icon = $request->get('icon');
            $subCategoryObj->category_id = $request->get('category_id');
            $subCategoryObj->sira = $request->get('sira');
            $subCategoryObj->save();

            return response()->json(['status' => 'ok' ,'data' => $subCategoryObj->toArray()]);
        }
    }

    public function getAllSubCategory(Request $request){
        $validator = Validator::make($request->all(),[

        ]);
        if ($validator->fails()){

        }
        else{
            $subCategories = SubCategory::where('category_id',$request->get('cat_id'))->get();
            return response()->json(['status' => 'ok' , 'data' => $subCategories]);
        }
    }

    public function findCategoryByName($categoryName){

        $mainCategoryName = "";
        $category = Category::where('slug',$categoryName)->first();
        $subcategory = SubCategory::where('slug',$categoryName)->first();

        if ($category){
            $mainCategoryName = $category->name;
        }
        else{
            $mainCategoryName = $subcategory->name;
        }
        $books = Book::where('category_id',$category['id'])
            ->orWhere('sub_category_id',$subcategory['id'])
            ->get();

        $data = [
          'books' => $books,
          'categoryName' => $mainCategoryName
        ];

        return view('front.category_page',$data);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function getBookByName($bookName){
        $book = Book::where('slug',$bookName)->first();
        return view('front.product',compact('book'));
    }
}

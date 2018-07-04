<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Writer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.pages.books.books', compact('books'));
    }

    public function addEditBook($book)
    {

        return view('admin.modals.books_add_edit', compact('book'));
    }

    public function addEditBookAction(Request $request, $book)
    {
        $validator = Validator::make($request->all(), [

        ]);

        if ($validator->fails()) {

        } else {
            if ($book == 0) {
                $bookObj = new Book();
            } else {
                $bookObj = Book::find($book);
            }

            $bookObj->name = $request->get('bookName');
            $bookObj->book_description = $request->get('book_description_text');
            $bookObj->publisher_id = $request->get('publisher');
            $bookObj->category_id = $request->get('category');
            $bookObj->sub_category_id = $request->get('sub_category');
            $bookObj->book_status_id = $request->get('book_status');
            $bookObj->book_lang_id = $request->get('book_lang');
            $bookObj->cost = $request->get('cost');
            $bookObj->page_count = $request->get('pageCount');
            $bookObj->stock_count = $request->get('stock_count');
            $bookObj->publishing_date = date('Y-m-d',strtotime($request->get('publishing_date')));
            $bookObj->isbn = $request->get('isbn');
            $bookObj->publishing_count = $request->get('publishing_count');

            if ($request->hasFile('book_img')) {
                $book_img = $request->file('book_img');
                $bookImgDestination = public_path() . '/images/front/images/book_images/';
                $bookImgUrl = time()."_".str_slug($request->get('bookName')).".". $book_img->getClientOriginalExtension();
                $bookImage = Image::make($book_img);
                $bookImage->save($bookImgDestination . $bookImgUrl);
                $bookObj->book_img = $bookImgUrl;
            }

            $bookObj->save();
            if ($request->has('writerName')) {
                $bookObj->book_writers()->detach();
                $bookObj->book_writers()->attach(explode(",", $request->get('writerName')));
            }
        }
    }
}

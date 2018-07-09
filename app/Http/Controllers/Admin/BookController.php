<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Publisher;
use App\Writer;
use Carbon\Carbon;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    public function index($locale = 'az')
    {
        app()->setLocale($locale);
        $books = Book::all();
        return view('admin.pages.books.books', compact('books'));
    }

    public function addEditBook($book)
    {
        $bookObj = Book::find($book);
        $writerData = [];
        $publisherData = [];
        $categoryData = [];
        $subCategoryData = [];
        $bookStatusData = [];
        $bookLangData = [];

        if ($book != 0){
            foreach ($bookObj->book_writers as $writer){
                $writerData[] = ['id' => $writer->id , 'text' => $writer->name];
            }

            $publisherData = ['id' => $bookObj->publisher_id , 'text' => $bookObj->publisher->name];
            $categoryData = ['id' => $bookObj->category_id , 'text' => $bookObj->category->name];
            $subCategoryData = ['id' => $bookObj->sub_category_id , 'text' => $bookObj->sub_category->name];
            $bookStatusData = ['id' => $bookObj->book_status_id , 'text' => $bookObj->book_status->name];
            $bookLangData = ['id' => $bookObj->book_lang_id , 'text' => $bookObj->book_lang->name];
        }
        $data = [
            'book' => $book,
            'bookObj' => $bookObj,
            'writerData' => json_encode($writerData),
            'publisherData' => json_encode($publisherData),
            'categoryData' => json_encode($categoryData),
            'subCategoryData' => json_encode($subCategoryData),
            'bookStatusData' => json_encode($bookStatusData),
            'bookLangData' => json_encode($bookLangData)
        ];
        return view('admin.modals.books.books_add_edit', $data);
    }

    public function infoBook($book){
        $bookObj = Book::find($book);
        return view('admin.modals.books.books_info', compact('bookObj'));
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

            $writerNames = "";
            if ($request->has('writerName')){
                $writers= explode(",",$request->get('writerName'));
                foreach($writers as $key => $writer){
                    $writerObj = Writer::find($writer);
                    $writerNames .= $writerObj->name;
                    if (count($writers) > $key+1){
                        $writerNames.=" ";
                    }
                }
            }
            $publisherName = "";
            if ($request->has('publisher')){
                $publisherObj = Publisher::find($request->get('publisher'));
                $publisherName = $publisherObj['name'];
            }

            $bookObj->name = $request->get('bookName');
            $bookObj->slug = str_slug($request->get('bookName')." ".$writerNames." ".$publisherName);
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

    public function deleteBook(Request $request){
        $validator = Validator::make($request->all(),[

        ]);

        if ($validator->fails()){

        }
        else{
            $bookObj = Book::find($request->get('id'));
            $bookObj->delete();
            return response()->json(['status' => 'ok']);
        }
    }
}

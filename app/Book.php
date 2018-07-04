<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    //
    use SoftDeletes;

    public function book_writers(){
        return $this->belongsToMany(Writer::class,'writer_book');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function sub_category(){
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }
    public function book_status(){
        return $this->belongsTo(BookStatus::class,'book_status_id');
    }
    public function publisher(){
        return $this->belongsTo(Publisher::class,'publisher_id');
    }
    public function book_lang(){
        return $this->belongsTo(BookLang::class,'book_lang_id');
    }
}

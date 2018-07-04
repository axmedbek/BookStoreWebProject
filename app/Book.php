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
}

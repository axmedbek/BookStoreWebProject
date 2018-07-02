<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;


    public function sub_categories(){
        return $this->belongsToMany(SubCategory::class,'sub_categories','category_id');
    }
}

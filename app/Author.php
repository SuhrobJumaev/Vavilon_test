<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = ['id'];

    //Books
    public function books(){
        return $this->hasMany('App\Book','author_id','id');
    }

    public function scopelastAuthors($query,$count){

        return $query->orderBy('created_at','desc')->take($count)->get();

    }

}

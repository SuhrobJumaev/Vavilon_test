<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id'];

    public function author(){
        return $this->belongsTo('App\Author','author_id','id');
    }

    public function scopelastBooks($query,$count){

        return $query->orderBy('created_at','desc')->take($count)->get();

    }
}

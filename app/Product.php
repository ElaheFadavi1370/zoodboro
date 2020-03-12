<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'title' ,
        'body',
        'category_id',
        'photo_id',
        'price',
        'availability'
    ];

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function photo(){

        return $this->belongsTo('App\Photo');

    }
    public function getBodyHtmlAttribute()
    {

        return \Parsedown::instance()->text($this->body);

    }
//    public function getUrlAttribute()
//    {
//        return route('products.show');
//
//    }
}

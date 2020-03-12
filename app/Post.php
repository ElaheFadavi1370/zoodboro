<?php

namespace App;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
protected $fillable=[
    'category_id',
    'photo_id',
    'title',
    'body',
    'author', 'email', 'user_id'
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

    public function comments()
    {

        return $this->hasMany('App\Comment');
    }

    }

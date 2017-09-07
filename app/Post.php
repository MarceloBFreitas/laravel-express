<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";

    protected $fillable = [
        'title',
        'content'
    ];


    //Pegar todos os comentários do post
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    //acessar as tags pelo post
    public function tags()
    {
        return $this->belongsToMany('App\Tag','posts_tags');
    }
}

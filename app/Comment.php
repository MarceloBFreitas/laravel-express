<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'post_id',
        'name',
        'email',
        'comment'
    ];


    //pegar de qual post é esse comentario
    public function post(){
        return $this->belongsTo('App\Post');
    }
}

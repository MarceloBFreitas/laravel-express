<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::all();
        return view('post.index',['posts'=>$post]);
    }



}

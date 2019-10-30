<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index')->with('posts', Post::with('author', 'comments')->get());
    }
}

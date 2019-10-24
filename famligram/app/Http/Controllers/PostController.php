<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('feed.index')->with('posts', Post::with('author', 'comments')->get());
    }
}

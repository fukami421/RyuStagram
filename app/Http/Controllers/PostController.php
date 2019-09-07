<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = "投稿一覧";
        return view('post.home', ['title' => $title]);
    }

    public function add()
    {
        return view('post.post');
    }
}

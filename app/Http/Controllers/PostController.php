<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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

    public function create(Request $request)
    {
        // done
        // 1. requestから取ってくる
        // 2. それをtableに挿入
        // todo
        // 1. user_idには、ログイン中のuserのidを入れる
        $post = new Post();
        $form = $request->all();
        unset($form['_token']);
        $post->file = $request->file;
        $post->description = $request->description;
        $post->user_id = 1;
        $post->save();
        return redirect('/posts');
    }
}

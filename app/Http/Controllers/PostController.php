<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $title = "投稿一覧";
        $posts = Post::All();
        return view('post.home', ['title' => $title, 'posts' => $posts]);
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
        // 3. 画像ファイルを保存する
        // todo
        // 1. user_idには、ログイン中のuserのidを入れる
        // 2. 同じ名前のファイルは保存できないのをなんとかする

        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                $request->file->storeAs('/public/posted_files/', $filenameWithExt);
            } //redirect
        } //redirect
        else{
            return redirect('/posts/add');//error文の表示
        }
        $post = new Post();
        $form = $request->all();
        unset($form['_token']);
        $post->file = $filenameWithExt;
        $post->description = $request->description;
        $post->user_id = Auth::id();
        $post->save();
        return redirect('/posts');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Post;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->id))
        {
            $user = User::where('id', $request->id)->first();
            $posts = Post::where('user_id', $request->id)->get();
            return view('user.user', ['user' => $user, 'posts' => $posts]);
        }
    }
    public function show_all_users()
    {
        // ただの変数定義ですが、ここでModelにデータの処理を行わせたりします（後述）。
        $name = 'ryu1';
        $users = User::All();
        return view('user.home', ['users' => $users]);
    }

    public function show_mypage()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', Auth::id())->get();
        return view('user.mypage', ['user' => $user, 'posts' => $posts]);
    }
}

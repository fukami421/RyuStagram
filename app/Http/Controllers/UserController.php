<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        // ただの変数定義ですが、ここでModelにデータの処理を行わせたりします（後述）。
        $name = 'ryu1';
        $users = User::All();
        return view('user.home', ['users' => $users]);
    }

    public function show_mypage()
    {
        $user = Auth::user();
        return view('user.mypage', ['user' => $user]);
    }
}

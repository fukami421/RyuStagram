<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;

class Post extends Model
{
    protected $guarded = array('id', 'created_at', 'updated_at');

    // public function user()
    // {
    //     return $this->hasOne('App\Post');
    // }

    public function getUserName($id)
    {
        $user = User::where('id', $id)->first(); //getにしてはいけない
        $name = $user->name;
        return $name;
    }

    public function getLoginUserPost()
    {
        $post = Post::where('user_id', Auth::id())->get();
        return $post;
    }
}

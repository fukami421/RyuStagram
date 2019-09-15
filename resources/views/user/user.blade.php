@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center no_margin_bottom" role="alert">
  ここはに{{$user->name}}ついて表示するページだよ
</div>
<div class="bg-primary p-sm-4 profile">
  <img class="rounded-circle avatar" width="13%" src="/storage/profile_images/{{$user->avatar}}">
  <div class="my_name">{{$user->name}}</div>
</div>
<div class="posts_flex">
  @foreach($posts as $post)
  <div class="posts">
    <img class="post_image" src="/storage/posted_files/{{$post->file}}">
    <div class="user_name">投稿の説明: {{$post->description}}</div>
  </div>
  @endforeach
</div>
@endsection
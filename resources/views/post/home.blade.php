@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center" role="alert">
  ここは{{$title}}を表示するページだよ
</div>
<div class="posts_flex">
  @foreach($posts as $post)
  <div class="posts">
    <img class="post_image" src="/storage/posted_files/{{$post->file}}">
    <!-- $postに含まれるuser_idからuser名を取得しよう -->
    <div class="user_name">投稿者: {{$post->getUserName($post->user_id)}}</div>
    <div class="user_name">投稿の説明: {{$post->description}}</div>
  </div>
  @endforeach
</div>

@endsection
@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center" role="alert">
  ここはユーザー一覧を表示するページだよ
</div>
<div class="users_flex">
  @foreach($users as $user)
  <div class="users">
    <a href="/user/{{$user->id}}">
      <img class="user_avatar rounded-circle" src="/storage/profile_images/{{$user->avatar}}">
      <!-- <div>{{$user->name}}</div> -->
    </a>
  </div>
  @endforeach
</div>
@endsection
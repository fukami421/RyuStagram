@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center" role="alert">
  ここはユーザー一覧を表示するページだよ
</div>
<div class="users_flex">
  <div class="users">
    @foreach($users as $user)
    <img class="user_avatar rounded-circle" src="/storage/profile_images/{{$user->avatar}}">
    <!-- <div>{{$user->name}}</div> -->
    @endforeach
  </div>
</div>
@endsection
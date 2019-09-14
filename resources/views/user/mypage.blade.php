@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center no_margin_bottom" role="alert">
  ここはMyPageを表示するページだよ
</div>
<div class="bg-primary p-sm-4 profile">
  <img class="rounded-circle avatar" width="150vw" src="/storage/profile_images/{{$user->avatar}}">
  <div class="my_name h1">{{$user->name}}</div>
</div>
<div class="col-md-8 offset-md-4">
  <a href="/logout" class="btn btn-secondary" role="button">
    Logout
  </a>
</div>
@endsection
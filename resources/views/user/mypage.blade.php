@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center" role="alert">
  ここはMyPageを表示するページだよ
</div>
<div class="col-md-8 offset-md-4">
  <a href="/logout" class="btn btn-secondary" role="button">
    Logout
  </a>
</div>
@endsection
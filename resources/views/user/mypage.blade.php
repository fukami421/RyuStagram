@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center" role="alert">
  ここはMyPageを表示するページだよ
</div>
<div class="form-group row mt-2">
  <div class="col-md-8 offset-md-4">
    <a href="/login/google" class="btn btn-secondary" role="button">
      Google Login
    </a>
  </div>
</div>
@endsection
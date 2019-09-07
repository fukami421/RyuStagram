@extends('layouts.common')
@section('content')
<form class="under_header">
  <!-- ファイルアップロード -->
  <div class="form-group">
    <label>File input</label><br>
    <input type="file">
  </div>
  <!-- 画像の説明 -->
  <div class="form-group">
    <label>Descrption</label>
    <input type="email" class="form-control" placeholder="Description">
  </div>
  <!-- 送信ボタン -->
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection
@extends('layouts.common')
@section('content')
<div class="alert alert-primary under_header text-center" role="alert">
  ここは投稿をするページだよ
</div>
<form action='/posts/add' enctype="multipart/form-data" method="post">
  <!-- ファイルアップロード -->
  <div class=" form-group">
    <label>File input</label><br>
    <input type="file" name='file'>
  </div>
  <!-- 画像の説明 -->
  <div class="form-group">
    <label>Descrption(任意)</label>
    <textarea rows="7" cols="10" class="form-control textarea" placeholder="Description" name="description"></textarea>
  </div>
  {{ csrf_field() }}
  <!-- 送信ボタン -->
  <button type="submit" class="btn btn-default btn-info" value="send">Submit</button>
</form>
@endsection
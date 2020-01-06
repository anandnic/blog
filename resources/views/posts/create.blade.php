@extends('master')
@section('content')
<h2>Add a post</h2>

@if($errors->all())
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
<form action="{{route('posts.store')}}" method="post">
@csrf
<div class="form-group">
Title<input type="text" name="title" id="title">
</div><br>
<div class="form-group">
  <label for="">Content</label>
  <textarea name="content" id="content" rows="10" cols="30" ></textarea>
</div>
<div class="form-control">
<button type="submit">Add a Post</button>
</div>

</form>
@endsection

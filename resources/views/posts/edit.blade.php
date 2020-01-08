@extends('master')
@section('content')
<h2>Update the post</h2>

@if($errors->all())
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
@if (session()->has('message'))
<div>{{session()->get('message')}}</div>
@endif
<form action="{{route('posts.update',$post->id)}}" method="post">
@csrf
@method('put')
<div class="form-group">
<label for="title" >Title</label><input type="text" value="{{$post->title}}" name="title" id="title">
</div><br>
<div class="form-group">
  <label for="">Content</label>
  <textarea name="content" id="content" rows="10" cols="30" >{{$post->content}}</textarea>
</div>
<div class="form-control">
<button type="submit">Update</button>
</div>

</form>
@endsection

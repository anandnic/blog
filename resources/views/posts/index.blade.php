@extends('master')
    @section('content')
    
    <h1>All Posts</h1>
    @foreach($posts as $post)
    <div class="card">
    <div class="card-body">
    <h2>
    <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
    </h2>
    </div>
    </div>
    @endforeach
    @endsection
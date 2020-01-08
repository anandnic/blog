@extends('master')
    @section('content')
    
    <h1>All Posts</h1>
    @foreach($posts as $post)
    <div class="card">
    <div class="card-body">
    <h2>
    <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
    <a href="{{route('posts.edit',$post->id)}}">EDIT</a>
    <form onsubmit="return confirm('Are you sure you want to delete')" action="{{route('posts.destroy',$post->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
    </form>
    </h2>
    </div>
    </div>
    @endforeach
    {{$posts->links()}}
    @endsection
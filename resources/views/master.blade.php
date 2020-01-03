<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="bg-info text-white p-5">
<a href="{{route('posts.index')}}" class="btn btn-secondary">Home</a>
<a href="{{route('posts.create')}}" class="btn btn-secondary">Create Post</a>
</div>
<div class="container">
@yield('content')
</div>
 
</body>
</html> 
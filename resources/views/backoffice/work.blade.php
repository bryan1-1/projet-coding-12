<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-dark">
<nav class="nav justify-content-center bg-secondary">
  <a class="nav-link active" href="/work/create">create new Works</a>
  <a class="nav-link" href="/work">Works</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($work as $work)
<div class="my-4 bg-secondary">
    <div class="">
<img class="mt-4" height="100px" width="100px" src="{{asset('storage/'.$work->url)}}" alt="">
<hr>
<p>{{$work->title}}</p>
<hr>
<p>{{$work->subtitle}}</p>
<hr>
    <p>{{$work->type_id}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/work/{{$work->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="row my-2">
<form class="mx-auto" action="/work/{{$work->id}}/edit" method="get">
    @csrf
    <button type="submit" class="btn btn-success">edit</button>   
</form>
</div>
<hr>
</div>
</div>
@endforeach
</body>
</html>
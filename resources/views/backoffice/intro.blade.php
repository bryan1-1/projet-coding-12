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
  <a class="nav-link active" href="/intro/create">create new Intros</a>
  <a class="nav-link" href="/intro">Introductions</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($intro as $intro)
<div class="my-4 bg-secondary">
    <div class="">
<img class="mt-4" height="100px" width="100px" src="{{asset('storage/'.$intro->url)}}" alt="">
<hr>
<p>{{$intro->title}}</p>
<hr>
<p>{{$intro->subtitle}}</p>
<hr>
<p>{{$intro->informative}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/intro/{{$intro->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="row my-2">
<form class="mx-auto" action="/intro/{{$intro->id}}/edit" method="get">
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

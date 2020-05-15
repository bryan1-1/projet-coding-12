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
  <a class="nav-link active" href="/feature/create">create new Features</a>
  <a class="nav-link" href="/feature">Features</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
 @foreach ($feature as $feat)
<div class="my-4 bg-secondary">
    <div class="">
<hr>
<p>{{$feat->title}}</p>
<hr>
<p>{{$feat->description}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/feature/{{$feat->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="row my-2">
<form class="mx-auto" action="/feature/{{$feat->id}}/edit" method="get">
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

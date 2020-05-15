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
  <a class="nav-link" href="/footer">Footer Text</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($footer as $footer)
<div class="my-4 bg-secondary">
    <div class="">
<hr>
<p>{{$footer->title}}</p>
<hr>
<p>{{$footer->description}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/footer/{{$footer->id}}/edit" method="get">
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
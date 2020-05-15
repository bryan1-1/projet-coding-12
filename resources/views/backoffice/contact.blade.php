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
  <a class="nav-link" href="/contact">New mails</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($contact as $contact)
<div class="my-4 bg-secondary">
    <div class="">
<hr>
<p>{{$contact->name}}</p>
<hr>
<p>{{$contact->email}}</p>
<hr>
<p>{{$contact->address}}</p>
<hr>
<p>{{$contact->number}}</p>
<hr>
<p>{{$contact->message}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/contact/{{$contact->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<hr>
</div>
</div>
@endforeach
</body>
</html>
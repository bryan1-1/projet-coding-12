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
<div>
    <form action="/feature" method="post" enctype="multipart/form-data">
        @csrf
        <input  value="title" type="text" name="title" id="">
        <input  value="description" type="text" name="description" id="">
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>
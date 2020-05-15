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
<div>
    <form action="/work" method="post" enctype="multipart/form-data">
        @csrf
       
        <label for="inputFile">upload</label>
        <input type="file" name="url" id="inputFile">
        <input  value="title" type="text" name="title" id="">
        <input  value="subtitle" type="text" name="subtitle" id="">
        <div class="form-group">
            <label for="role_id"></label>
            <select class="form-control" name="type_id" id="">
                @foreach ($project as $role)
            <option value="{{$role->id}}">{{$role->name}} </option>
                @endforeach
            </select>
          </div>
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>
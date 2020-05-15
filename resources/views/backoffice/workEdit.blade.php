<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-dark">
    <nav class="nav justify-content-center bg-secondary">
        <a class="nav-link active" href="/work/create">create new Works</a>
        <a class="nav-link" href="/work">Works</a>
        <a class="nav-link" href="/home">back office menu</a>
      </nav>
    <div class="flex-center position-ref">
    <form action="/work/{{$work->id}}" method="post" enctype='multipart/form-data'>
            @csrf   
            @method('put') 
                    <div class="container">
                <div class="row my-3">
                    <div class="col-9 mt-5 bg-secondary text-white">
                        <h3>{{$work->title}}</h3>
                        <input type="text" name="title">
                        <p>{{$work->subtitle}}</p>
                        <input type="text" name="subtitle">
                        <p>choose picture</p>
                        <input type="file" name="url">
                        <div class="col my-4">
                            <button class="btn btn-success" type="submit">edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
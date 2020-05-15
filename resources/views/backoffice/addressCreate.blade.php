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
  <a class="nav-link active" href="/address/create">create a new Address</a>
  <a class="nav-link" href="/address">Address</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
<div>
    <form action="/address" method="post" enctype="multipart/form-data">
        @csrf
       
     
        <input  value="title" type="text" name="title" id="">
        <input  value="Country" type="text" name="aCountry" id="">
        <input  value="Street" type="text" name="aStreet" id="">
        <input  value="Street Number" type="text" name="aNumber" id="">
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>
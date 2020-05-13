<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    
</head>

<body>

   @extends('layouts.nav')
   @section('content')
   @if (is_array($posts) || is_object($posts))
    @foreach($posts as $post)
   <div class="container">
  
    <div class="row">
      <div class="col-md-4">
        <h2>{{$post->text}}</h2>
        <p>{{$post->textarea}} </p>
        <p>{{$post->author}}&raquo;</p>
      </div>
    <hr>
  </div> 
    @endforeach
    @endif
    </div>
    <button class="btn"><a href="http://127.0.0.1:8000/news">Назад</a></button>
    <button class="btn"><a href="http://127.0.0.1:8000/category">Открыть все категории</a></button>
</body>
@endsection
</html>
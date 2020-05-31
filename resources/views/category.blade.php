<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    
</head>

<body>

   @extends('layouts.nav')
   @section('content')
   @if(isset($movies))
   @if (is_array($contacts) || is_object($contacts))
    @foreach($contacts as $contact)
   <div class="container">
  
    <div class="row">
      <div class="col-md-4">
        <h2>{{$contact->name}}</h2>
        <p>{{$contact->email}} </p>
        <p>{{$contact->message}}&raquo;</p>
      </div>
    <hr>
  </div> 
    @endforeach
    @endif
    @endif
    </div>
    <button class="btn"><a href="http://127.0.0.1:8000/news">Назад</a></button>
    <button class="btn"><a href="http://127.0.0.1:8000/category">Открыть все категории</a></button>
</body>
@endsection
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
@extends('layouts.layout')


    
   <div class="container">
   @section('content')
   @if (is_array($posts) || is_object($posts))
    @foreach($posts as $post)
    <div class="row">
      <div class="col-md-4">
        <h2>{{$post->head}}</h2>
        <p>{{$post->text}} </p>        
        <h5>{{$post->author}}  ({{$post->date}})</h5>
        
        <hr>  
      </div>
      
  </div>
  @endforeach
  @endif
  <div class="content">
    <button class="btn"><a href="http://127.0.0.1:8000/news">"Все новости"</a></button>
    <button class="btn"><a href="http://127.0.0.1:8000/news/economic">"Экономика"</a></button>
    <button class="btn"><a href="http://127.0.0.1:8000/news/politic">"Политика"</a></button>
    <button class="btn"><a href="http://127.0.0.1:8000/news/sport">"Спорт"</a></button>
    {{$posts->links()}}
    </div>
    </div>
   
      @endsection
    

</html>
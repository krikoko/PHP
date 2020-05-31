<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    
</head>

<body>

@extends('layouts.app')

@section('content')
<button type="button" class="btn btn-secondary"><a href="{{route('home')}}">Back</a></button>
   @if(isset($contacts))
   @if (is_array($contacts) || is_object($contacts))
   {{$contacts->links()}}
   @foreach($contacts->take(5) as $contact)
    
   <div class="container">
  
        <h6>{{$contact->name}}</h6>
        <p>{{$contact->email}} </p>
        <p>{{$contact->message}}</p>
        <p>{{$contact->created_at}}</p>
      </div>
    <hr>
  
    @endforeach
    @endif
    @endif
    
    {{$contacts->links()}}
</body>
@stop
</html>
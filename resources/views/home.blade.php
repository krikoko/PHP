
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Личный кабинет</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы авторизованы как, {{Auth::user()->name}}!
                </div>
                <h5 class="mt-0" style="border-bottom:1px solid black;">{{Auth::user()->name}}</h5> 
                <img src="https://a.deviantart.net/avatars/g/e/george0.png?4" class="align-self-start mr-3" alt="ava" style="padding:10px;"><br><br>&nbsp;&nbsp;
                
               
        

    
                @if((bool)Auth::user()->profile_id === true)              
  <form method="post" action="{{route('profile.store')}}">
  @csrf
                
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Имя</label>
      <input type="text" name="name" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Фамилия</label>
      <input type="text" name="sername" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Город</label>
    <input type="text" name="city" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Телефон</label>
    <input type="text" name="tel" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Немного о Вас</label>
      <input type="textarea" name="about" class="form-control" id="inputCity">
    </div>
   
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="profile_id" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Профиль заполнен</label>
  </div>
  @if((bool)Auth::user()->rank === true)
  <div class="form-group form-check">
    <input type="checkbox" name="profile_id" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Сделать пользователя админом</label>
  </div>
  @endif
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
@endif
            </div>
        
        </div>
    </div><br><br>

@if((bool)Auth::user()->rank === true)

    <button type="button" class="btn btn-primary"><a href="{{route('add.index')}}" style="color:cornsilk">Перейти к таблицам</a></button><br><br>
    <button type="button" class="btn btn-primary"><a href="admin/home/contact"style="color:cornsilk">Сообщения от клиентов</a></button>
@endif
           </div>
       </div>
    </div>
 </div>
    
</div>
@endsection

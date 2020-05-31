
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
            </div>
        
        </div>
    </div><br><br>

    <button type="button" class="btn btn-primary"><a href="{{route('add.index')}}" style="color:cornsilk">Перейти к таблицам</a></button><br><br>
    <button type="button" class="btn btn-primary"><a href="/home/contact"style="color:cornsilk">Сообщения от клиентов</a></button>
    
           </div>
       </div>
    </div>
 </div>
    
</div>
@endsection

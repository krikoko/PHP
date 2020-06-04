@include('layouts.part')


<div class='container'>
<div class="col">
  <form action="{{route('add.store')}}" method="POST">
@csrf

<div class="row">
      <textarea type="textarea" name = "text" class="form-control" placeholder="Введите текст..." value = ""style="height:400px"></textarea>
    @if($errors->has('text'))
    <div class="alert alert-danger" role="alert">
    @foreach($errors->get('text') as $error)
      <p>{{$error}}</p>
    @endforeach
    </div>
    @endif
</div>

  <div class="form-row">
    <div class="col">
      <input type="text" name = "head" class="form-control" placeholder="Заголовок" value = "" >
      @if($errors->has('head'))
      <div class="alert alert-danger" role="alert">
    @foreach($errors->get('head') as $error)
      <p>{{$error}}</p>
     @endforeach
    </div>
    @endif
    </div>

    <div class="col">
      <input type="date" name = "date" class="form-control" placeholder="Дата публикации" value = "">
      @if($errors->has('date'))
      <div class="alert alert-danger" role="alert">
    @foreach($errors->get('date') as $error)
      <p>{{$error}}</p>
     @endforeach
    </div>
    @endif
    </div>

    <div class="col">
    <select name = "category" class="custom-select" id="inputGroupSelect01">
    <option value="economic">economic</option>
    <option value="politic">politic</option>
    <option value="sport">sport</option>
  </select>
    </div>

    <div class="col">
      <input type="text" name = "author" class="form-control" placeholder="Автор публикации" value = "">
      @if($errors->has('author'))
      <div class="alert alert-danger" role="alert">
    @foreach($errors->get('author') as $error)
      <p>{{$error}}</p>
     @endforeach
    </div>
    @endif
    </div>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-success">Опубликовать</button>&nbsp;&nbsp;
    <button type="reset" class="btn btn-outline-danger">Отмена</button>&nbsp;&nbsp;
    <a href="{{route('add.index')}}">Index page</a>
    
</form>
</div>
</div>

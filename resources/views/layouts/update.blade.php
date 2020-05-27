@include('layouts.part')
<div class="content">
  <form action="{{route('add.update', ['add' => $add])}}" method="POST">
@csrf
@method('PUT')
<div class="col">
      <textarea type="textarea" name = "text" class="form-control" placeholder="Введите текст" value = "{{$add->text}}"></textarea>
    </div>
  <div class="form-row">
    <div class="col">
      <input type="text" name = "head" class="form-control" placeholder="Заголовок" value = "{{$add->head}}">
    </div>
    <div class="col">
      <input type="date" name = "date" class="form-control" placeholder="Дата публикации" value = "{{$add->date}}">
    </div>
    <div class="col">
    <select name = "category" class="custom-select" id="inputGroupSelect01" value = "{{$add->category}}">
    <option value="economic">economic</option>
    <option value="politic">politic</option>
    <option value="sport">sport</option>
  </select>
    </div>
    <div class="col">
      <input type="text" name = "author" class="form-control" placeholder="Автор публикации" value = "{{$add->author}}">
    </div>
    </div>
    <button type="submit" class="btn btn-outline-success">Опубликовать</button>
    <button type="reset" class="btn btn-outline-danger">Отмена</button>
    <a href="{{route('add.index')}}">Index page</a>
    <a href="{{route('add.create')}}">Store page</a>
  
</form>
</div>

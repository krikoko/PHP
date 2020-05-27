<link rel="stylesheet" href="../css/table.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="content">
<button type="button" class="btn btn-outline-primary"><a href="{{route('add.create')}}">Add post</a></button>
{{$posts->links()}}
@foreach($posts as $post)
<div class="content">

<table class="table_dark">
  <tr>
    <th>ID</th>
    <th>{{$post->id}}</th>
    
    </tr>
  <tr>
    <td>Заголовок</td>
    <td>{{$post->head}}</td>
    </tr>
  <tr>
    <td>Текст поста</td>
    <td>{{$post->text}}</td>
    </tr>
  <tr>
    <td>Автор</td>
    <td>{{$post->author}}</td>
    </tr>
  <tr>
    <td>Категория</td>
    <td>{{$post->category}}</td>    
    </tr>
    <tr>
    <td>Дата публикации</td>
    <td>{{$post->date}}</td>
    </tr>
  </table>
  <button type="button" class="btn btn-outline-warning"><a href="{{route('add.edit', ['post'=>$post])}}">Update post</a></button>
  


</div>
</div>
@endforeach
{{$posts->links()}}

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


@if(session()->has('success'))

<div class="alert alert-success" role="alert">
{{session()->get('success')}}
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger" role="alert">
{{session()->get('error')}}
</div>

@endif
</html>
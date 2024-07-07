<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>ksnckjdbcd</p>
    
    <h1>Agregar nuevas categorias</h1>
    <form method="POST" action="{{route('viajero.store')}}">
        @csrf
            <div>
            <label for="exampleInputEmail1" class="form-label">nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">color</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="color">
          </div>          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>
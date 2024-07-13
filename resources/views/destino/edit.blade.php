<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar estudiante</h1>
<form action="{{route('destino.update', $destino)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    codigo:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$destino->codigo) }}">
    <br>
    </label>
    <br>
    <label>
    nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$destino->nombre)}}">
    <br>
    </label>
    <br>
    otros_datos
    <br>
    <input name=" otros_datos" type="text" value="{{old(' otros_datos',$destino->otros_datos)}}">
    <br>
    </label>
    <br>
    
    <button  type="submit">Actualizar destino</button>
   
</form>
</body>
</html>
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
<form action="{{route('viajero.update', $viajero)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    dni:
    <br>
    <input name="dni" type="text" value="{{old('dni',$viajero->dni) }}">
    <br>
    </label>
    <br>
    <label>
    nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$viajero->nombre)}}">
    <br>
    </label>
    <br>
    direccion
    <br>
    <input name=" direccion" type="text" value="{{old(' direccion',$viajero->direccion)}}">
    <br>
    </label>
    <br>
    telefono
    <br>
    <input name=" telefono" type="text" value="{{old('telefono',$viajero->telefono)}}">
    <br>
    </label>
    <button  type="submit">Actualizar viajero</button>
   
</form>
</body>
</html>
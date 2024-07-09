<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    h1>Lista viajero</h1>

    @foreach ($viajero as $viajero)
    <tr>
        <br>
        <td>{{$viajero->dni}}</td>
        <td>{{$viajero->nombre}}</td>
        <td>{{$viajero->telefono}}</td>
        <td>{{$viajero->direccion}}</td>
        <br>
        <td><a href="{{route('viajero.show',$viajero->id)}}">Detalle</a></td>
        <br>
        <form action="{{route('viajero.destroy',$viajero->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            <br>
            <td><a href="{{route('viajero.edit',$viajero->id)}}">Editar</a></td> 
        </form>
@endforeach

</body>
</html>
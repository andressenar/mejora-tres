<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    h1>Lista destino</h1>

    @foreach ($destino as $destino)
    <tr>
        <br>
        <td>{{$destino->codigo}}</td>
        <td>{{$destino->nombre}}</td>
        <td>{{$destino->otros_datos}}</td>
        
        <br>
        <td><a href="{{route('destino.show',$destino->id)}}">Detalle</a></td>
        <br>
        <form action="{{route('destino.destroy',$destino->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            <br>
            <td><a href="{{route('destino.edit',$destino->id)}}">Editar</a></td> 
        </form>
@endforeach

</body>
</html>
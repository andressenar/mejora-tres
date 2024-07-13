<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <h1>Agregar destino</h1>
    <form method="POST" action="{{route('destino.store')}}">
      @csrf
        <h1>datos del destino</h1>
      <label>
          codigo
          <br>
          <input type="text" name="codigo">
      </label>
      <br>
      <label>
          nombre
          <br>
          <input type="text" name="nombre">
      </label>
      <br>
      <label>
          otros_datos
          <br>
          <input type="text" name="otros_datos">
      </label>
      <br>
      
      <br>      
      
      <button type="submit">Enviar Formulario:</button>
      </form>
</body>
</html>
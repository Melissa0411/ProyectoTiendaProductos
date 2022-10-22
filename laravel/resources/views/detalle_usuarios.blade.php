<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><center>Detalles usuario</center></h1>
    <hr>
    <b>Nombre: </b> {{$detalle_usuarios->app . '   ' . $detalle_usuarios->ap . '   ' . $detalle_usuarios-> nombre}}<br>
   <b>Matricula:</b> {{$detalle_usuarios->clave}}<br>
   <b>Fecha de nacimiento: </b> {{$detalle_usuarios->fn}}<br>
   <b>Genero: </b> {{$detalle_usuarios->gen}}<br>
   <b>Email: </b> {{$detalle_usuarios->email}}<br>
   <b>Contraseña: </b>{{$detalle_usuarios->pass}}<br>
   <b>Resultado: </b>{{$detalle_usuarios->id_usuario-20}}<br>





</body>
</html>
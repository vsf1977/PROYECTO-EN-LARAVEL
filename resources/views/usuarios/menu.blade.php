<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu de usuarios</title>
</head>
<body>
    <h1>Menu de usuarios</h1><hr>
    <ul>
        <li><a href="{{ url('/usuarios/lista') }}">Listar usuarios</a></li>
        <li><a href="{{ url('/usuarios/nuevo') }}">Crear usuarios</a></li>
        <li><a href="{{ url('/usuarios/borrar') }}">Borrar usuarios</a></li>
        <li><a href="{{ url('/') }}">Volver</a></li>
    </ul>
</body>
</html>

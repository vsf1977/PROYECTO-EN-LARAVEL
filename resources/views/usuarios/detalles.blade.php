<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de usuario</title>
</head>
<body>
    <h1>{{ 'Informacion de '.$usuario[0]->nombre }}</h1>
    <h3>{{ 'Correo : '.$usuario[0]->correo }}</h3>
    <h3>{{ 'Profesion : '.$profesion[0]->titulo }}</h3>
    <a href="{{ url('/usuarios/lista') }}">Volver al listado de usuarios</a>
</body>
</html>

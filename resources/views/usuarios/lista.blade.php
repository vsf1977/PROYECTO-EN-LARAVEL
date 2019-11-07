<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuarios</title>
</head>
<body>
    <h1>{{ $titulo }}</h1><hr>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>
                {{ $usuario->nombre }}
                <a href="{{ url('/usuarios/detalles/'.$usuario->id) }}">Ver detalle</a>
                <a href="{{ route('usuarios.detalles',['id' => $usuario->id]) }}">Ver detalle</a>
                <a href="{{ action('Usercontroller@detalles',['id' => $usuario->id]) }}">Ver detalle</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ url('/usuarios') }}">Menu de usuarios</a><br>
    <a href="{{ url('/') }}">Menu principal</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo usuario</title>
</head>
<body>
    <h1>Datos de nuevo usuario</h1><hr>
    <form method="POST" action="{{ url('usuarios/guardar') }}">
        {!! csrf_field() !!}
        <label for="nombre">Nombre :</label>
        <input type="text" name='nombre' required>
        @if ($errors->has('nombre'))
             <span style='color: red;'>{{ $errors->first('nombre') }}</span> 
        @endif
        <br><br>
        <label for="correo">Correo :</label>
        <input type="email" name='correo' required>
        @if ($errors->has('correo'))
             <span style='color: red;'>{{ $errors->first('correo') }}</span> 
        @endif
        <br><br>
        <label for="profesion">Profesion :</label>
        <select name="profesion">
        @foreach ($profesiones as $profesion)
            <option value="{{$profesion->id}}">{{$profesion->titulo}}</option>
        @endforeach
        </select>         
        <br><br>
        <label for="pass">Contraseña :</label>
        <input type="password" name='pass'>
        @if ($errors->has('pass'))
             <span style='color: red;'>{{ $errors->first('pass') }}</span> 
        @endif
        <br><br>
        <button type="submit">Guardar</button><br><br>
    </form>
    <a href="{{ url('/usuarios') }}">Menu de usuarios</a><br>
</body>
</html>

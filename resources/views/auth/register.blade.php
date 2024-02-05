@extends('layout')
@section('title','Registro')
@section('content')
<form action="{{route('signup')}}" method="post">
    @csrf

    <label for="username">Nombre de usuario:</label><br>
    <input type="text" name="username" id="username" value="{{old('username')}}"><br>

    <label for="name">Nombre completo:</label><br>
    <input type="text" name="name" id="name" value="{{old('name')}}"><br>

    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email" value="{{old('email')}}"><br>

    <label for="birthday">Fecha de nacimiento:</label><br>
    <input type="date" name="birthday" id="birthday"><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" name="password" id="password"><br>

    <label for="password_confirmation">Repite la contraseña:</label><br>
    <input type="password" name="password_confirmation" id="password_confirmation"><br>

    <input type="submit" value="Registrarse">
</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@endsection

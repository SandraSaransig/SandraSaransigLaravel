@extends('layout')

@section('style')
<link rel="stylesheet" href="./styles/login.css">
@endsection

@section('title','Registro')

@section('content')

{{-- Formulario de registro --}}
<div class="container">
    <div class="wrapper">

        <form action="{{route('signup')}}" method="post">
            @csrf

            <h2 class="login">Registro</h2>
            <div class="input-box">
                <label for="username">Nombre de usuario:</label>
                <input type="text" name="username" id="username" value="{{old('username')}}">
            </div>

            <div class="input-box">
                <label for="name">Nombre completo:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
            </div>

            <div class="input-box">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="{{old('email')}}">
            </div>

            <div class="input-box">
                <label for="birthday">Fecha de nacimiento:</label>
                <input type="date" name="birthday" id="birthday">
            </div>

            <div class="input-box">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="input-box">
                            <label for="password_confirmation">Repite la contraseña:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <input type="submit" value="Registrarse" class="btn">
        </form>
    </div>
</div>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@endsection

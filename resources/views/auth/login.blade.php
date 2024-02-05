@extends('layout')
@section('title','Login')
@section('content')
<div class="wrapper">
    <form action="{{route('login')}}" method="post">
        @csrf

        <h2>Login</h2>
        <div class="input-box">
            <input type="text" placeholder="Nombre de usuario">
            <box-icon type='solid' name='user'></box-icon>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Contraseña">
            <box-icon name='lock-alt' type='solid' ></box-icon>
        </div>

        <input type="submit" value="Login" class="btn">

        <div class="register-link">
            <span>¿No tienes cuenta?
                <a href="{{route('signup')}}">Registrate</a>
            </span>
        </div>

    </form>
</div>
@endsection

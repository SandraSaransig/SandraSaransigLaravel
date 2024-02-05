@extends('layout')
@section('style')
<link rel="stylesheet" href="./styles/login.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('title','Login')
@section('content')
<div class="container">

    <div class="wrapper">
        <form action="{{route('login')}}" method="post">
            @csrf

            <h2 class="login">Login</h2>
            <div class="input-box">
                <input type="text" placeholder="Nombre de usuario">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña">
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <input type="submit" value="Login" class="btn">

            <div class="register-link">
                <span>¿No tienes cuenta?
                    <a href="{{route('signup')}}">Registrate</a>
                </span>
            </div>

        </form>
    </div>
</div>
@endsection

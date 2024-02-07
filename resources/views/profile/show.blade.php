@extends('layout')

@section('title','Perfil')

@section('content')
@auth
    <a href="{{route('profile.edit')}}">Editar</a>
    <h3>Perfil {{Auth::user()->username}}</h3>
    <div class="info-user">
        Nombre:
        {{Auth::user()->name}}
        <br>
        Correo:
        {{Auth::user()->email}}
        <br>
        Fecha de nacimiento:
        {{Auth::user()->birthday}}
        <br>
    </div>

    @else
    <a href="{{route('login')}}">Login</a>

@endauth
@endsection

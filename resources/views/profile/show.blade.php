@extends('layout')

@section('title','Perfil')

@section('content')
@auth
    <a href="{{route('logout')}}">Salir</a>
    <h3>Perfil {{Auth::user()->name}}</h3>

    @else
    <a href="{{route('login')}}">Login</a>

@endauth
@endsection

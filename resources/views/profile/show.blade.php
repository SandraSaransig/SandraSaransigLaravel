@extends('layout')

@section('title', 'Perfil')

@section('content')
    <h3>Perfil {{ Auth::user()->username }}</h3>
    @auth

        <div class="info-user">
            Nombre:
            {{ Auth::user()->name }}
            <br>
            Correo:
            {{ Auth::user()->email }}
            <br>
            Fecha de nacimiento:
            {{ Auth::user()->birthday }}
            <br>
        </div>
        <br>

        {{-- Dirige al usuario a la pagina para editar el perfil --}}
        <a href="{{ route('profile.edit', Auth::user()->id) }}">Editar datos</a>


    @endauth
@endsection

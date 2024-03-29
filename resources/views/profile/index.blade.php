@extends('layout')

@section('title', 'Perfil')

@section('content')
    @auth
    {{-- Lista de usuarios que aparecera al admin, en la opcion de cuentas puede ver los usuarios registrdos --}}
        <h3>Perfil {{ Auth::user()->username }}</h3>
        <div class="user-container">

            @forelse ($user as $userList)
                <div class="list-user">
                    <span>
                        Nombre de usuario: {{ $userList->username }}
                    </span>
                </div>
            @empty
                <h3>No hay usuarios registrados</h3>
            @endforelse

        @endauth
    </div>
@endsection

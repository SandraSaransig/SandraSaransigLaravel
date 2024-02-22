@extends('layout')

@section('title', 'Lista de jugadores')

@section('content')
{{-- Vista para mostrar el listado de jugadores --}}
<h2 class="title">Lista de jugadores</h2>

    <div class="player">

        @forelse ($players as $player)
            <div class="players">
                <ul>
                    <li>
                        <div class="list-user">
                            @if ($player->visible == 1)
                                @guest
                                {{-- Si el usuario es invitado solo puede ver el jugador --}}
                                    {{ $player->name }}
                                    <img src="" alt="Imagen Jugador">
                                @endguest
                                @auth
                                {{-- Si el usuario esta registrado puede ver la ficha del jugador --}}
                                    @if (Auth::user()->rol === 'user')
                                        <a href="{{ route('players.show', $player->slug) }}">{{ $player->name }}</a>
                                        <img src="" alt="Imagen Jugador">
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </li>
                </ul>
            </div>

            @auth
                @if (Auth::check() && Auth::user()->rol === 'admin')
                {{-- Si el usuario tiene rol admin puede acer visible o no visible al jugador --}}
                    <div class="list-admin">
                        <a href="{{ route('players.show', $player->slug) }}">{{ $player->name }}</a><br>
                        <img src="" alt="Imagen Jugador">
                        <br>
                        <a href="{{ route('players.visible', $player) }}">Visible</a>
                        <a href="{{ route('players.invisible', $player) }}">Invisible</a>
                    </div>
                @endif
            @endauth

        @empty
            <h2>No hay jugadores</h2>
        @endforelse
    </div>
@endsection

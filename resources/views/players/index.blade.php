@extends('layout')

@section('title', 'Lista de jugadores')

@section('content')
    <h2 class="title">Lista de jugadores</h2>
    @forelse ($players as $player)
        <div class="players-list">
            <ul>
                <li>
                    <div class="user">
                        @if ($player->visible == 1)
                            @guest
                                {{ $player->name }}
                                <img src="" alt="Imagen Jugador">
                            @endguest
                            @auth
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
                <div class="list-admin">
                    <a href="{{ route('players.show', $player->slug) }}">{{ $player->name }}</a>
                    <img src="" alt="Imagen Jugador">
                    <br>
                    <a href="{{ route('visible-player', $player) }}">Visible</a>
                    <a href="{{ route('invisible-player', $player) }}">Invisible</a>
                </div>
            @endif
        @endauth

    @empty
        <h2>No hay jugadores</h2>
    @endforelse
@endsection

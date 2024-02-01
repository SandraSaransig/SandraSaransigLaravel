@extends('layout')
@section('title','Lista de jugadores')

@section('content')´

    <h2 class="title">Lista jugadores</h2>
    @forelse ($players as $player)
    <div>
        <ul>
            <li>
                <div>
                    <a href="{{route('players.show', $player->slug)}}">{{$player->name}}</a>
                    <img src="" alt="Imagen Jugador">
                </div>
                <div>
                    <a href="">Visible</a>
                    <a href="">Invisible</a>
                </div>
            </li>
        </ul>
    </div>

    @empty
        <h2>No hay jugadores</h2>
    @endforelse
@endsection

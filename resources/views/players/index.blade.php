@extends('layout')
@section('title','Lista de jugadores')

@section('content')´
Hola
    <h2 class="title">Lista jugadores</h2>
    @forelse ($players as $player)
    <div>
        <ul>
            <li>
                <a href="{{route('players.show', $player->slug)}}">{{$player->name}}</a>
            </li>
        </ul>
    </div>

    @empty
        <h2>No hay jugadores</h2>
    @endforelse
@endsection

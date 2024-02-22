@extends('layout')

@section('title','Información Jugador')

@section('content')

{{-- Musetra la vista de la ficha del jugador --}}
    <h2 class="title">Información: {{$player->name}}</h2>
    <div class="player">
        Twitter: {{$player->twitter}}
        <br>
        Instagram: {{$player->instagram}}
        <br>
        Twitch: {{$player->twitch}}
        <br>
        Numero de camiseta: {{$player->tshirt_number}}
        <br>
        Posición: {{$player->position}}
    </div>
@endsection

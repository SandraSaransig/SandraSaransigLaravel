@extends('layout')

@section('title','Jugador Guardado')

@section('content')
{{-- Vista que muestra que el jugador se ha añadido correctamente por el admin --}}
    <h2>Jugador guardado: {{$player->name}}</h2>
@endsection

@extends('layout')

@section('title', 'Evento Guardado')

@section('content')
    <h2>Evento guardado: {{ $event->name }}</h2>
@endsection

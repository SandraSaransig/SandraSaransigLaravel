@extends('layout')

@section('title', 'Evento editado')

@section('content')
{{-- Mensaje de evento modificado --}}
<h2>Evento modificada: {{$event->name}}</h2>
@endsection

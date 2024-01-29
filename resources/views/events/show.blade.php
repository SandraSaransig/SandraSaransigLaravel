@extends('layout')
@section('title', 'Información de eventos')

@section('content')
    <h2 class="title">Información: {{$event->name}}</h2>
    <div>
        Descripcion:
        {{$event->descriptin}}
        <br>
        Location: {{$event->location}}
        <br>
        Fecha: {{$event->date}}
        <br>
        Hora: {{$event->hour}}
        <br>
        Tipo: {{$event->type}}
        <br>
        Etiquetas: {{$event->tags}}
    </div>
    <div class="">
        <a href="">Me gusta</a>
        <a href="">Borrar me gusta</a>
    </div>

@endsection
@section('segment')
<a href="{{route('events.edit', $event->slug)}}">Editar evento</a>
<br>
<form action="{{route('events.destroy',['event'=>$event->id])}}" action="post">
@csrf
@method('delete')
<input type="submit" value="Eliminar Evento">
</form>
@endsection

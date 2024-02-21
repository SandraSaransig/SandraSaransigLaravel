@extends('layout')
@section('title', 'Información de eventos')

@section('content')
    <h2 class="title">Información: {{ $event->name }}</h2>
    <div class="evento">

        <div class="event">
            Descripcion:
            {{ $event->description }}
            <br>
            Location: {{ $event->location }}
            <br>
            Fecha: {{ $event->date }}
            <br>
            Hora: {{ $event->hour }}
            <br>
            Tipo: {{ $event->type }}
            <br>
            Etiquetas: {{ $event->tags }}
        </div>
        <div class="like-nolike">
            {{-- Se mostrara la opcion de me gusta y quitar me gusta si el usuario esta logueado --}}
            @auth
                <a href="{{ route('event.like', $event->id) }}">Me gusta</a>
                <a href="">Borrar me gusta</a>

            @endauth
        </div>

    @endsection

    @section('segment')
        @auth
            @if (Auth::user()->isAdmin())
                {{-- Ruta editar evento --}}
                <a href="{{ route('events.edit', ['event' => $event->slug]) }}">Editar evento</a>
                <br><br>

                {{-- Eliminar evento --}}
                <form action="{{ route('events.destroy', ['event' => $event->slug]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar Evento">
                </form>
            @endif
        @endauth
    </div>

@endsection

@extends('layout')
@section('title', 'Lista de eventos')

@section('content')
    <h2 class="title">Próximos Eventos</h2>
    <div class="evento">
        @forelse ($events as $event)
        <div>
            <ul>
                <li>
                    <a href="{{route('events.show',$event->slug)}}">{{$event->name}}</a>
                    <div class="like-nolike">
                        {{-- Si el usuario esta logueado puede dar like o quitarlo --}}
                        @auth

                        <a href="{{route('event.like', $event->id)}}">Me gusta</a>
                        <a href="">Borrar me gusta</a>

                        @endauth
                    </div>
                </li>
            </ul>
        </div>

        @empty
        <h2>No hay eventos próximos</h2>
        @endforelse
    </div>
@endsection

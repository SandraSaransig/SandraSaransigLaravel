@extends('layout')
@section('title', 'Lista de eventos')

@section('content')
    <h2 class="title">Eventos</h2>
    <div class="evento">
        @forelse ($events as $event)
            @if ($event->date >= now())
            <h2>Próximos Eventos</h2>
                {{-- Mostrar eventos futuros --}}
                <div class="event-future">
                    <ul>
                        <li>
                            <a href="{{ route('events.show', $event->slug) }}" class="event-a">{{ $event->name }}</a>
                            <div class="like-nolike">
                                {{-- Si el usuario esta logueado puede dar like o quitarlo --}}
                                @auth

                                    <a href="{{ route('event.like', $event->id) }}">Me gusta</a>
                                    <a href="">Borrar me gusta</a>

                                @endauth
                            </div>
                        </li>
                    </ul>
                </div>
            @else
                {{-- Eventos anteriores --}}
                <h2>Eventos</h2>
                <div class="event-past">
                    <ul>
                        <li>
                            <a href="{{ route('events.show', $event->slug) }}" class="event-a">{{ $event->name }}</a>
                            <div class="like-nolike">
                                {{-- Si el usuario esta logueado puede dar like o quitarlo --}}
                                @auth

                                    <a href="{{ route('event.like', $event->id) }}" class="event-a">Me gusta</a>
                                    <a href="" class="event-a">Borrar me gusta</a>

                                @endauth
                            </div>
                        </li>
                    </ul>
                </div>
            @endif

        @empty
            <h2>No hay eventos</h2>
        @endforelse
    </div>
@endsection

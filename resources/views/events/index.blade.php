@extends('layout')
@section('title', 'Lista de eventos')

@section('content')
    <h2 class="title">Próximos Eventos</h2>
    @forelse ($events as $event)
    <div>
        <ul>
            <li>
                <a href="{{route('events.show',$event->slug)}}">{{$event->name}}</a>
                <div>
                    <a href="">Me gusta</a>
                    <a href="">No me gusta</a>
                </div>
            </li>
        </ul>
    </div>

    @empty

    @endforelse
@endsection

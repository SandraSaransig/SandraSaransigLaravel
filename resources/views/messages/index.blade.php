@extends('layout')

@section('title', 'Mensajes')

@section('content')
{{-- Vista para mostrar os mensajes que dejan en contacto, solo el admin lo puede ver --}}
    <h1>Mensajes</h1>
    @foreach ($messages as $message)
        <div class="messages">
            {{-- Si el mensaje esta leido se mostrara en negro --}}
            @if (!$message->readed)
                <span class="false-readed">
                    <a href="{{ route('messages.show', $message->id) }}">{{ $message->name }}-{{$message->subject}}</a>
                </span>
            @else
            {{-- Pero si el mensaje no esta leido el texto estara azul --}}
                <span class="true-readed">
                    <a href="{{ route('messages.show', $message->id) }}">{{ $message->name }}-{{$message->subject}}</a>
                </span>
            @endif
        </div>
    @endforeach

@endsection

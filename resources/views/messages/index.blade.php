@extends('layout')

@section('title', 'Mensajes')

@section('content')

    <h1>Mensajes</h1>
    @foreach ($messages as $message)
        <div class="messages">
            @if (!$message->readed)
                <span class="false-readed">
                    <a href="{{ route('messages.show', $message->id) }}">{{ $message->name }}-{{$message->subject}}</a>
                </span>
            @else
                <span class="true-readed">
                    <a href="{{ route('messages.show', $message->id) }}">{{ $message->name }}-{{$message->subject}}</a>
                </span>
            @endif
        </div>
    @endforeach

@endsection

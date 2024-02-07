@extends('layout')
@section('title','Mensajes')
@section('content')
<h1>Mensajes</h1>
@forelse ($messages as $message)
<div class="mensaje">
    @forelse ($messages as $message)
    {{-- <a href="{{route('messages.show', $message->slug)}}">{{$message->name}}</a> --}}
    @if ($message->readed != true)
    {{$message->name}}
    <br>
    Arreglar mensajes slug
    @endif
    @empty

    @endforelse
</div>

@empty

@endforelse
@endsection

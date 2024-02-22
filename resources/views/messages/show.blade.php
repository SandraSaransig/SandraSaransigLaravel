@extends('layout')

@section('title', 'Información mensaje')

@section('content')
{{-- Vista para mostrar la información del mensaje --}}
    <h2>Información: </h2>

    <div>
        {{ $message->name }}
        <br>
        {{ $message->subject }}
        <br>
        {{ $message->text }}
        <br>

    </div>

@endsection

@section('segment')
    {{-- Delete Message --}}
    <form action="{{ route('messages.destroy', ['message' => $message->id]) }}" method="post">

        @csrf
        @method('delete')
        <input type="submit" value="Eliminar mensaje">

    </form>
@endsection

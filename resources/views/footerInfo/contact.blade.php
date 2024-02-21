@extends('layout')

@section('title', 'Contacto')

@section('content')
    <h1 class="title">Contacto</h1>
    {{-- Formulario enviar mensaje --}}
    <div class="form-contact">

        <form action="{{ route('messages.store') }}" method="post">
            @csrf

            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <br>
                Error:{{ $message }}
            @enderror
            <br>

            <label for="subject">Asunto</label>
            <input type="subject" name="subject" id="subject" value="{{ old('subject') }}">
            @error('subject')
                <br>
                Error:{{ $message }}
            @enderror
            <br>

            <label for="text">Texto</label>
            <textarea name="text" id="text" cols="30" rows="10">{{ old('text') }}</textarea>
            @error('text')
                <br>
                Error:{{ $message }}
            @enderror
            <br>

            <input type="submit" value="Enviar">


        </form>

    </div>
@endsection

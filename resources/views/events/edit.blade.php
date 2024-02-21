@extends('layout')

@section('title', 'Edición Evento')

@section('content')
    <h2>Edición del evento: {{ $event->name }}</h2>
    <div class="evento">

        <form action="{{ route('events.update', $event) }}" method="post">
            @csrf
            @method('put')

            <label for="name">Titulo:</label>
            <input type="text" name="name" id="name" value="{{ $event->name }}">
            <br>

            <label for="description">Descripcion:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ $event->description }}</textarea>
            <br>

            <label for="location">Localización:</label>
            <input type="text" name="location" id="location" value="{{ $event->location }}">
            <br>

            <label for="date">Fecha:</label>
            <input type="date" name="date" id="date" value="{{ $event->date }}">
            <br>

            <label for="hour">Hora:</label>
            <input type="time" name="hour" id="hour" value="{{ $event->hour }}">
            <br>

            <label for="type">Tipo de evento:</label>
            <select id="type" name="type">
                <option value="official">Oficial</option>
                <option value="exhibition">Exhibición</option>
                <option value="charity">Caridad</option>
            </select>
            <br>

            <label for="tags">Tags:</label>
            <input type="text" name="tags" id="tags" value="{{ $event->tags }}">
            <br>

            <label for="visible">Visible:</label>
            <input type="checkbox" name="visible" id="visible" {{ $event->visible == 1 ? 'checked' : '' }}>
            <br>

            <input type="submit" value="Guardar evento">
        </form>
    </div>

@endsection

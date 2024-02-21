@extends('layout')

@section('title', 'Añadir Jugador')

@section('content')
    <h2>Añadir Jugador</h2>

    <div class="player">

        <form action="{{ route('players.store') }}" method="post">
            @csrf

            <label for="name">Nombre del jugador:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <br>
                Error:{{ $message }}
            @enderror
            <br>

            <label for="twitter">Twitter:</label>
            <input type="text" name="twitter" id="twitter" value="{{ old('twitter') }}">
            @error('twitter')
                <br>
                Error:{{ $message }}
            @enderror
            <br>

            <label for="instagram">Instagram:</label>
            <input type="text" name="instagram" id="instagram" value="{{ old('instagram') }}">
            @error('instagram')
                <br>
                Error:{{ $message }}
            @enderror

            <label for="twitch">Twitch:</label>
            <input type="text" name="twitch" id="twitch" value="{{ old('twitch') }}">
            @error('twitch')
                <br>
                Error:{{ $message }}
            @enderror
            <br>

            <label for="tshirt_number">Numero de camiseta</label>
            <input type="text" name="tshirt_number" id="tshirt_number" value="{{ old('tshirt_number') }}">
            @error('tshirt_number')
                <br>
                Error:{{ $message }}
            @enderror

            <label for="position">Posicion:</label>
            <input type="text" name="position" id="position" value="{{ old('position') }}">
            @error('position')
                <br>
                Error:{{ $message }}
            @enderror

            <label for="visible">Visible:</label>
            <input type="checkbox" name="visible" id="visible" {{ old('visible') ? 'checked' : '' }}>
            <br>

            <input type="submit" value="Añadir jugador">
        </form>
    </div>
@endsection

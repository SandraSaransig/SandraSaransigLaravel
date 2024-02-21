@extends('layout')

@section('title','Editar perfil')

@section('content')
<h2>Editar perfil</h2>

{{-- Editar los campos de nombre y cumpleaños --}}

<div class="form-profile">
    <form action="{{route('profile.update', ['user'])}}" method="post">

        @csrf
        @method('put')

        <label for="name">Nombre:</label><br>
        <input type="text" name="name" value="{{$user->name}}">
        <br>

        <label for="birthday">Fecha de nacimiento:</label>
        <br>
        <input type="date" name="birthday" id="birthday" value="{{$user->birthday}}"><br>

        <input type="submit" value="Guardar cambios">

    </form>
</div>
@endsection

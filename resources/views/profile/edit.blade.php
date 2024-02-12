@extends('layout')

@section('title','Editar perfil')

@section('content')
<h2>Editar perfil</h2>

<div class="form-profile">
    <form action="{{route('profile.update', $user)}}">

        @csrf
        @method('put')

        <label for="">Nombre de usuario:</label>{{$user->username}}

        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{old('name')}}">

        <label for="">Email:</label>{{$user->email}}

        <label for="password">Contraseña:</label>
        <input type="password" name="password">

        <input type="submit" value="Guardar cambios">

    </form>
</div>
@endsection

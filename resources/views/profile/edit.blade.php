@extends('layout')

@section('title','Editar perfil')

@section('content')
<h2>Editar perfil</h2>

<div class="form-profile">
    <form action="{{route('profile.update', $user)}}" method="post">

        @csrf
        @method('put')

        <label for="">Nombre de usuario:</label> {{$user->username}}
        <br>

        <label for="name">Nombre:</label><br>
        <input type="text" name="name" value="{{old('name')}}">
        <br>

        <label for="">Email:</label> {{$user->email}}
        <br>

        <label for="birthday">Fecha de nacimiento:</label>
        <br>
        <input type="date" name="birthday" id="birthday" value="{{$user->birthday}}"><br>

        <input type="submit" value="Guardar cambios">

    </form>
</div>
@endsection

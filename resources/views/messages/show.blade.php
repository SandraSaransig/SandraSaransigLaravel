@extends('layout')
@section('title', 'Información mensaje')
@section('content')
    <h2>Información: </h2>

    <div>
        {{$message->name}}
        <br>
        {{$message->subject}}
        <br>
        {{$message->text}}
        <br>

    </div>



@endsection

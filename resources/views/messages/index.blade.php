@extends('layout')
@section('title','Mensajes')
@section('content')
<h1>Mensajes</h1>
@forelse ($messages as $menssage)
    @if ($menssage->readed)
    {{$menssage->name}}

    @endif

<div class="mensaje">



    <a href="{{route('messages.show', $menssage->id)}}">{{$menssage->name}}</a>


</div>

@empty

<p>No hay mensajes.</p>

@endforelse


@endsection

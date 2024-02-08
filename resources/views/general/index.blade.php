@extends('layout')
@section('title','Productos')
@section('content')
<h3>Productos</h3>
@forelse ($products as $product)
<div class="product">
    {{$product->name}}
    <br>
    Precio:
    {{$product->price}}
    <br>
    Stock:
    {{$product->stock}}
    <br><br>
</div>
<br>
@empty

@endforelse
@endsection

@extends('layout')

@section('style')
    <link rel="stylesheet" href="/styles/products.css">
@endsection

@section('title', 'Productos')

@section('content')
    <h2>Productos</h2>
    <div class="product-container">
        @forelse ($products as $product)
            <div class="product">
                <div class="parent card">
                    <div class="card2">
                        <div class="content-box">

                            <h1 class="card-title">{{ $product->name }}</h1>
                            <span class="price">
                                Precio:
                                {{ $product->price }}
                            </span>
                            <span class="stock">
                                Stock:
                                {{ $product->stock }}
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h3>No hay productos</h3>
        @endforelse
    </div>
@endsection

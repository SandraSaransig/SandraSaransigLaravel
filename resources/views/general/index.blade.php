@extends('layout')

@section('style')
    <link rel="stylesheet" href="/styles/products.css">
@endsection

@section('title', 'Productos')

@section('content')
{{-- Vista para los productos de la tienda --}}
    <h2>Productos</h2>

    <div class="product-container">
        @forelse ($products as $product)
            @if ($product->stock > 0)
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
            @else
            {{-- Si el stock es 0 cambiara el texto a fuera de stock --}}
                <div class="product">
                    <div class="parent card">
                        <div class="card2">
                            <div class="content-box">

                                <h1 class="card-title">{{ $product->name }}</h1>
                                {{-- <span class="price">
                                    Precio:
                                    {{ $product->price }}
                                </span> --}}
                                <span class="stock">
                                    Fuera de stock
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @empty
        {{-- Si no hay producto mostrara que esta vacia la tienda --}}
            <h3>No hay productos</h3>
        @endforelse
    </div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container_Details">
    <h1 class="page-title">Product Details</h1>
    
    <div class="card product-card">
        <div class="card-body">
            <h3 class="product-name">{{ $product->name }}</h3>
            <p class="product-info"><strong>Product ID:</strong> {{ $product->product_id }}</p>
            <p class="product-info"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="product-info"><strong>Price:</strong> ${{$product->price}}</p>
            <p class="product-info"><strong>Stock:</strong> {{ $product->stock }}</p>
            <p class="product-info"><strong>Created At:</strong> {{ $product->created_at }}</p>
            <p class="product-info"><strong>Updated At:</strong> {{ $product->updated_at}}</p>

            @if($product->image)
                <p class="product-info"><strong>Image:</strong></p>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
            @else
                <p class="product-info"><strong>Image:</strong> No Image Available</p>
            @endif

            <a href="{{ route('products.index') }}" class="back-button">Back to List</a>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Product List</h1>
    <div class="action-bar">
        <div class="action-links">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
            <a href="{{ route('products.index', ['sort' => 'name']) }}">Sort by Name</a> |
            <a href="{{ route('products.index', ['sort' => 'price']) }}">Sort by Price</a>
        </div>
        
        <form action="{{ route('products.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search by Product ID or Description" value="{{ request('search') }}">
            <button type="submit">Search</button>
        </form>
    </div>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        No Image
                    @endif
                </td>
                <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a></td>
                <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a></td>
                <td>
                   <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    {{ $products->links() }}
</div>

@endsection

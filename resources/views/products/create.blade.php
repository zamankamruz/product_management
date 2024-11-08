@extends('layouts.app')

@section('content')

<div class="form-container">
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product_id">Product ID</label>
            <input type="text" name="product_id" required>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock">
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image">
        </div>

        <button type="submit" class="btn-submit">Save Product</button>
    </form>
</div>

@endsection


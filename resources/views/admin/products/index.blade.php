@extends('admin.layout')

@section('title', 'Products')
@section('page-title', 'Products')

@section('content')

    <div class="admin-panel">
        <div class="admin-panel-header">
            <h2>All Products</h2>
            <a href="{{ route('admin.products.create') }}" class="admin-btn-primary admin-btn-sm">+ Add Product</a>
        </div>

        <form action="{{ route('admin.products.index') }}" method="GET" class="admin-search-form">
            <input type="text" name="search" placeholder="Search by name or category..." value="{{ request('search') }}">
            <button type="submit" class="admin-btn-secondary admin-btn-sm">Search</button>
        </form>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Group</th>
                    <th>Rating</th>
                    <th>Tag</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>
                            <img class="admin-thumb"
                                 src="{{ $product->image_url }}"
                                 alt="{{ $product->name }}"
                                 onerror="this.src='{{ asset('images/logo.png') }}'">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>Rs. {{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->age_group }}</td>
                        <td>{{ $product->rating }} ★ ({{ $product->reviews }})</td>
                        <td>{{ $product->tag ?? '—' }}</td>
                        <td class="admin-actions">
                            <a href="{{ route('admin.products.edit', $product) }}" class="admin-link">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                  onsubmit="return confirm('Delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-link admin-link-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="admin-empty">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="admin-pagination">
            {{ $products->links() }}
        </div>
    </div>

@endsection

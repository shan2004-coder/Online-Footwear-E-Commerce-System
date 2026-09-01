@extends('admin.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

    <div class="admin-stats-grid">
        <div class="admin-stat-card">
            <div class="admin-stat-icon">👟</div>
            <div>
                <div class="admin-stat-value">{{ $totalProducts }}</div>
                <div class="admin-stat-label">Total Products</div>
            </div>
        </div>

        <div class="admin-stat-card">
            <div class="admin-stat-icon">👤</div>
            <div>
                <div class="admin-stat-value">{{ $totalUsers }}</div>
                <div class="admin-stat-label">Total Users</div>
            </div>
        </div>

        <div class="admin-stat-card">
            <div class="admin-stat-icon">🚹</div>
            <div>
                <div class="admin-stat-value">{{ $maleCount }}</div>
                <div class="admin-stat-label">Men's Shoes</div>
            </div>
        </div>

        <div class="admin-stat-card">
            <div class="admin-stat-icon">🚺</div>
            <div>
                <div class="admin-stat-value">{{ $femaleCount }}</div>
                <div class="admin-stat-label">Women's Shoes</div>
            </div>
        </div>

        <div class="admin-stat-card">
            <div class="admin-stat-icon">🧒</div>
            <div>
                <div class="admin-stat-value">{{ $kidsCount }}</div>
                <div class="admin-stat-label">Kids Shoes</div>
            </div>
        </div>
    </div>

    <div class="admin-panel">
        <div class="admin-panel-header">
            <h2>Recently Added Products</h2>
            <a href="{{ route('admin.products.index') }}" class="admin-link">View all →</a>
        </div>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Group</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($latestProducts as $product)
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
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="admin-empty">No products added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

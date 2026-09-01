@extends('admin.layout')

@section('title', 'Add Product')
@section('page-title', 'Add New Product')

@section('content')

    <div class="admin-panel">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.products._form')
        </form>
    </div>

@endsection

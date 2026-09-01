@php
    $product = $product ?? null;
@endphp

<div class="admin-form-grid">
    <div class="admin-form-group">
        <label>Product Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required>
    </div>

    <div class="admin-form-group">
        <label>Category</label>
        <input type="text" name="category" value="{{ old('category', $product->category ?? '') }}"
               placeholder="Running, Lifestyle, Sports..." required>
    </div>

    <div class="admin-form-group">
        <label>Price (Rs.)</label>
        <input type="number" step="0.01" min="0" name="price" value="{{ old('price', $product->price ?? '') }}" required>
    </div>

    <div class="admin-form-group">
        <label>Age Group</label>
        <select name="age_group" required>
            <option value="">-- Select --</option>
            @foreach (['Male', 'Female', 'Kids'] as $group)
                <option value="{{ $group }}" {{ old('age_group', $product->age_group ?? '') == $group ? 'selected' : '' }}>
                    {{ $group }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="admin-form-group">
        <label>Rating (0-5)</label>
        <input type="number" min="0" max="5" name="rating" value="{{ old('rating', $product->rating ?? 5) }}">
    </div>

    <div class="admin-form-group">
        <label>Reviews Count</label>
        <input type="number" min="0" name="reviews" value="{{ old('reviews', $product->reviews ?? 0) }}">
    </div>

    <div class="admin-form-group">
        <label>Tag (optional)</label>
        <input type="text" name="tag" value="{{ old('tag', $product->tag ?? '') }}" placeholder="New, Sale, Best Seller...">
    </div>

    <div class="admin-form-group">
        <label>Upload Image</label>
        <input type="file" name="image_file" accept="image/*">
    </div>

    <div class="admin-form-group admin-form-span-2">
        <label>Or Image Path / URL (used only if no file uploaded)</label>
        <input type="text" name="image_url" value="{{ old('image_url', $product->image ?? '') }}"
               placeholder="images/air-flex.avif or https://...">
    </div>

    @if (isset($product) && $product->image)
        <div class="admin-form-group admin-form-span-2">
            <label>Current Image</label>
            <img class="admin-thumb-lg"
                 src="{{ $product->image_url }}"
                 alt="{{ $product->name }}"
                 onerror="this.src='{{ asset('images/logo.png') }}'">
        </div>
    @endif

    <div class="admin-form-group admin-form-span-2">
        <label>Description</label>
        <textarea name="description" rows="4">{{ old('description', $product->description ?? '') }}</textarea>
    </div>
</div>

<div class="admin-form-actions">
    <button type="submit" class="admin-btn-primary">{{ isset($product) ? 'Update Product' : 'Save Product' }}</button>
    <a href="{{ route('admin.products.index') }}" class="admin-btn-secondary">Cancel</a>
</div>

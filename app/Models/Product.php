<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'price',
        'image',
        'age_group',
        'rating',
        'reviews',
        'tag',
        'description',
    ];

    /**
     * Resolve the correct public URL for the product image,
     * whether it was uploaded via the admin panel (stored on the
     * public disk), entered as a full URL, or points to a file
     * already inside public/ (e.g. images/air-flex.avif).
     */
    public function getImageUrlAttribute(): string
    {
        $image = $this->image;

        if (! $image) {
            return asset('images/logo.png');
        }

        if (str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
            return $image;
        }

        if (str_starts_with($image, 'products/')) {
            return asset('storage/' . $image);
        }

        return asset($image);
    }
}

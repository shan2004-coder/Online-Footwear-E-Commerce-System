<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('shop', compact('products'));
    }
}

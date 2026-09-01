<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalUsers = User::count();
        $maleCount = Product::where('age_group', 'Male')->count();
        $femaleCount = Product::where('age_group', 'Female')->count();
        $kidsCount = Product::where('age_group', 'Kids')->count();
        $latestProducts = Product::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalUsers',
            'maleCount',
            'femaleCount',
            'kidsCount',
            'latestProducts'
        ));
    }
}

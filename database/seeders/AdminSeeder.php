<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed the default admin account.
     * Login email: admin@stepx.com
     * Login password: admin123
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@stepx.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]
        );
    }
}

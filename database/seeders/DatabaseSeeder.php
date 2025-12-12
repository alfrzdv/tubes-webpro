<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Buat user biasa
        User::create([
            'name' => 'User Test',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Buat categories
        Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik',
            'description' => 'Kategori produk elektronik'
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
            'description' => 'Kategori produk fashion'
        ]);

        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi',
            'description' => 'Kategori artikel teknologi'
        ]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'), // Ganti dengan password yang aman
            'roles' => 'admin', // Role untuk Admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Regular User
        DB::table('users')->insert([
            'name' => 'Regular User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user12345'), // Ganti dengan password yang aman
            'roles' => 'user', // Role untuk User
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

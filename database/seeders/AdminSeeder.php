<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Admin Brasil',
            'email'    => 'admin@gmail.com',         // Ganti dengan email admin kamu
            'password' => Hash::make('admin12345'), // Ganti dengan password pilihanmu
        ]);
    }
}
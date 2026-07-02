<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@steam.local',
            'password' => Hash::make('passwd123'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        User::factory(20)->create();
    }
}
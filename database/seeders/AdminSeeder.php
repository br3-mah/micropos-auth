<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@ecoagrozm.com',
            'email_verified_at' => now(),
            'password' => Hash::make('eco.@2023'), // hashing the password
            'current_source' => 'auth',
            'current_destination' => 'auth',
            'global_secret_word' => 'eco.@2023',
            'customer_group' => 'admin',
            'type' => 'admin',
            'status' => true
        ]);
    }
}

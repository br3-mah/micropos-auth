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
            'fname' => 'Micro',
            'lname' => 'POS',
            'mname' => 'Administrator',
            'email' => 'admin@micropos.com',
            'email_verified_at' => now(),
            'password' => Hash::make('mic@@2024'), // hashing the password
            'current_source' => 'auth',
            'current_destination' => 'd',
            'global_secret_word' => 'mic@@2024',
            'customer_group' => 'admin',
            'type' => 'admin',
            'status' => true,
            'otp_verified' => 1
        ]);
    }
}

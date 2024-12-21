<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'), // Corrected "password" field
            'type' => 2, // Corresponds to "admin" as per your type casting
            'gender' => 'male',
        ]);

        User::create([
            'name' => 'Seller User',
            'email' => 'seller@example.com',
            'password' => Hash::make('12345678'), // Corrected "password" field
            'type' => 1, // Corresponds to "seller"
            'gender' => 'female',
        ]);

        User::create([
            'name' => 'General User',
            'email' => 'user@example.com',
            'password' => Hash::make('12345678'), // Corrected "password" field
            'type' => 0, // Corresponds to "user"
            'gender' => 'other',
        ]);
    }
}
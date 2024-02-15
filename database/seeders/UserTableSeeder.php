<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed an admin user
        User::create([
            'name' => 'Admin@LoanHub',
            'email' => 'admin@LoanHub.com',
            'role' => 'admin',
            'status' => 'active',
            'password' => bcrypt('adminpassword'),
        ]);
        
        // seed an regular user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@LoanHub.com',
            'role' => 'user',
            'status' => 'active',
            'password' => bcrypt('password'),
        ]);
    }
}

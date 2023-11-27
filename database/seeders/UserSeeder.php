<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'fullname' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verification' => now(),
            'role_id' => 1,
            'password' => Hash::make('password')
        ]);

        
        User::create([
            'username' => 'leader',
            'fullname' => 'leader',
            'email' => 'leader@gmail.com',
            'email_verification' => now(),
            'role_id' => 3,
            'password' => Hash::make('password')
        ]);

        User::create([
            'username' => 'user1',
            'fullname' => 'user1',
            'email' => 'masyarakat@gmail.com',
            'email_verification' => now(),
            'role_id' => 2,
            'password' => Hash::make('password')
        ]);
    }
}

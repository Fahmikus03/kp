<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Type_of_complaint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
            'username' => 'pimpinan',
            'fullname' => 'pimpinan',
            'email' => 'pimpinan@gmail.com',
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

        Role::create([
            'name_role' => 'Admin'
        ]);

        Role::create([
            'name_role' => 'Masyarakat'
        ]);
        Role::create([
            'name_role' => 'pimpinan'
        ]);

        Type_of_complaint::create([
            'name_type_of_complaint' => 'KTP'
        ]);

        Type_of_complaint::create([
            'name_type_of_complaint' => 'Kartu Keluarga'
        ]);

        Type_of_complaint::create([
            'name_type_of_complaint' => 'Akte Kelahiran'
        ]);

    }
}

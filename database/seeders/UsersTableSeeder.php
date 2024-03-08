<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some sample users
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'admin',
        ]);
    
        User::create([
            'name' => 'yassine',
            'email' => 'yassine@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'member',
        ]);
    
        User::create([
            'name' => 'fadi',
            'email' => 'fadi@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'member',
        ]);
    
        User::create([
            'name' => 'amine',
            'email' => 'amine@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'organizer',
        ]);
    
        User::create([
            'name' => 'mohammed',
            'email' => 'moha@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'organizer',
        ]);
    
        User::create([
            'name' => 'emma',
            'email' => 'emma@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'member',
        ]);
    
        User::create([
            'name' => 'sarah',
            'email' => 'sarah@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'member',
        ]);
    
        User::create([
            'name' => 'peter',
            'email' => 'peter@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'organizer',
        ]);
    
        User::create([
            'name' => 'lisa',
            'email' => 'lisa@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'member',
        ]);
    
        User::create([
            'name' => 'james',
            'email' => 'james@gmail.com',
            'password' => Hash::make('20012001'),
            'role' => 'organizer',
        ]);
    
        // Add more sample users here...
    }
    
}

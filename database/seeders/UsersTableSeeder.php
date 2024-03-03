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
    'name' => 'mohammed',
    'email' => 'moha@gmail.com',
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
    'name' => 'john',
    'email' => 'john@gmail.com',
    'password' => Hash::make('20012001'),
    'role' => 'organizer',
]);    }
}
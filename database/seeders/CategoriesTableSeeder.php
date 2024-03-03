<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create(['name' => 'Concert']);
        category::create(['name' => 'Conference']);
        category::create(['name' => 'Workshop']);  
        Category::create(['name' => 'Music Festival']);
        Category::create(['name' => 'Art Exhibition']);
        Category::create(['name' => 'Sporting Event']);   
    
    }
}

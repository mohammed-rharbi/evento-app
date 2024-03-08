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
        // Create categories
        Category::create(['name' => 'Concert']);
        Category::create(['name' => 'Conference']);
        Category::create(['name' => 'Workshop']);  
        Category::create(['name' => 'Music Festival']);
        Category::create(['name' => 'Art Exhibition']);
        Category::create(['name' => 'Sporting Event']);  
        Category::create(['name' => 'Food Festival']);
        Category::create(['name' => 'Comedy Show']);
        Category::create(['name' => 'Film Screening']);
        Category::create(['name' => 'Fashion Show']);
        Category::create(['name' => 'Book Fair']);
        Category::create(['name' => 'Charity Event']);
        Category::create(['name' => 'Technology Expo']);
        Category::create(['name' => 'Gaming Tournament']);
        Category::create(['name' => 'Cultural Festival']);
        Category::create(['name' => 'Health & Wellness Expo']);
        Category::create(['name' => 'Business Summit']);
        Category::create(['name' => 'Educational Workshop']);
    }
    
}

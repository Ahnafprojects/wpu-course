<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'blue-100'
        ]);

        Category::create([
            'name' => 'artificial Intelligence',
            'slug' => 'ai',
            'color' => 'red-100'
        ]);

        Category::create([
            'name' => 'mobile Development',
            'slug' => 'mobile-development',
            'color' => 'green-100'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laptop',
            'image' => 'LaptopLogo.jpg',
            'slug' => Str::slug('laptop'),
        ]);

        Category::create([
            'name' => 'Smart-Phone',
            'image' => 'smartPhone.webp',
            'slug' => Str::slug('smart-phone'),
        ]);

        Category::create([
            'name' => 'Ram',
            'image' => 'ram.png',
            'slug' => Str::slug('ram'),
        ]);
    }
}

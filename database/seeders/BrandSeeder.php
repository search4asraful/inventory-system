<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Apple',
            'image' => 'appleLogo.png',
            'slug' => Str::slug('apple'),
        ]);

        Brand::create([
            'name' => 'Realme',
            'image' => 'realmeLogo.webp',
            'slug' => Str::slug('realme'),
        ]);

        Brand::create([
            'name' => 'Lava',
            'image' => 'lavaLogo.png',
            'slug' => Str::slug('lava'),
        ]);
    }
}

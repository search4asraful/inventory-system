<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'asrafulvau009@gmail.com',
            'password' => bcrypt('demoAdmin'),
            'image' => 'admin.png',
            'type' => 'admin',
        ]);

        User::create([
            'name' => 'Staff user',
            'email' => 'user@staff.com',
            'password' => bcrypt('demoStaff'),
            'image' => 'staff.png',
        ]);
    }
}

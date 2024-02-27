<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'user@admin.com',
            'password' => bcrypt('demoAdmin'),
            'image' => 'admin.png',
            'type' => 'admin',
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Staff',
            'email' => 'user@staff.com',
            'password' => bcrypt('demoStaff'),
            'image' => 'staff.png',
            'email_verified_at' => Carbon::now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Ahnaf',
            'username' => 'ahnaf123',
            'email' => 'ahnaf@example.com',
            'password' => Hash::make    ('password123'),
        ]);
        User::factory(5)->create();
    }

}

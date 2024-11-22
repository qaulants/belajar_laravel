<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([[
            'name' => 'Tsaqila',
            'email' => 'tsaqila@gmail.com',
            'password' => bcrypt('lala12'),
        ],[
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin2'),
        ]]);
    }
}

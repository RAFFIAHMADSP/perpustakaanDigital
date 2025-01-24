<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ],
            [
                'name' => 'petugas',
                'username' => 'petugas',
                'email' => 'petugas@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'petugas',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
            
    }
}

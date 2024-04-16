<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
                'role_as' => 1,
                'google_id' => null
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456789'),
                'role_as' => 0,
                'google_id' => null
            ],
            [
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('123456789'),
                'role_as' => 0,
                'google_id' => null
            ],
            [
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456789'),
                'role_as' => 0,
                'google_id' => null
            ],
            [
                'name' => 'User3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('123456789'),
                'role_as' => 0,
                'google_id' => null
            ],
            [
                'name' => 'User4',
                'email' => 'user4@gmail.com',
                'password' => Hash::make('123456789'),
                'role_as' => 0,
                'google_id' => null
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}

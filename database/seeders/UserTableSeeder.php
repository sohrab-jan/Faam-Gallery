<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin

            [
                'name' => 'Admin',
                //                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'role' => 'admin',
            ],

            //Agent
            [
                'name' => 'Agent',
                //                'username' => 'agent',
                'email_verified_at' => now(),
                'email' => 'agent@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'agent',
            ],

            //User
            [
                'name' => 'User',
                //                'username' => 'user',
                'email_verified_at' => now(),
                'email' => 'user@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
            ],
        ]);
    }
}

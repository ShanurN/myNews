<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password1'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@example.com',
            'password' => Hash::make('password2'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@example.com',
            'password' => Hash::make('password3'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

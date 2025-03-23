<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            DB::table('news')->insert([
                'name' => 'Новость ' . $i,
                'description' => 'Описание новости ' . $i,
                'image' => 'Landscape-Color.jpg',
                'author' => 'Автор ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

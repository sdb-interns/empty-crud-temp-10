<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'ねこについて',
            'text' => 'ねこはかわいい',
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => 'いぬについて',
            'text' => 'いぬもかわいい',
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => '鳥について',
            'text' => '鳥もかわいい',
            'user_id' => 2,
        ]);
    }
}

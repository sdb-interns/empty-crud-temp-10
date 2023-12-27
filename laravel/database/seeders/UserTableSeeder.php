<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'sdb太郎',
            'email' => 'example1@example.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'sdb花子',
            'email' => 'example2@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

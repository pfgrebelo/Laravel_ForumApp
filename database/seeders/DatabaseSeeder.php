<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'username' => 'pedro',
            'email' => 'pedro@mail.com',
            'password' => Hash::make('password'),
            'isAdmin' => 1
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'username' => 'barksalot',
            'email' => 'barksalot@mail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'username' => 'meowsalot',
            'email' => 'meowsalot@mail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'My First Post',
            'body' => 'Lorem ipsum this is my post.',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'My Second Post: HTML',
            'body' => 'HTML stands for Hyper Text Markup Language',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'Being a Dog Is Fun',
            'body' => 'I like to run and bark.',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('follows')->insert([
            'user_id' => 2,
            'followeduser' => 1
        ]);

        DB::table('follows')->insert([
            'user_id' => 3,
            'followeduser' => 1
        ]);

        DB::table('follows')->insert([
            'user_id' => 3,
            'followeduser' => 2
        ]);
    }
}

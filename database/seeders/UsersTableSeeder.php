<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'test_user',
            'email' => 'test_user@example.com',
            'password' => bcrypt('password'),
            ],
            [
            'name' => 'test_user2',
            'email' => 'test_user2@example.com',
            'password' => bcrypt('password'),
            ],
            [
            'name' => 'test_user3',
            'email' => 'test_user3@example.com',
            'password' => bcrypt('password'),
            ],
            [
            'name' => 'test_user4',
            'email' => 'test_user4@example.com',
            'password' => bcrypt('password'),
            ],
            [
            'name' => 'test_user5',
            'email' => 'test_user5@example.com',
            'password' => bcrypt('password'),
            ],
        ]);
    }
}

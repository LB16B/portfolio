<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class PaidMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paid_members')->insert([
            [
                'name' => 'test1',
                'kana' => 'テスト',
                'email' => 'test1@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test2',
                'kana' => 'テスト',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test3',
                'kana' => 'テスト',
                'email' => 'test3@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test4',
                'kana' => 'テスト',
                'email' => 'test4@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test5',
                'kana' => 'テスト',
                'email' => 'test5@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test6',
                'kana' => 'テスト',
                'email' => 'test6@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test7',
                'kana' => 'テスト',
                'email' => 'test7@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test8',
                'kana' => 'テスト',
                'email' => 'test8@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test9',
                'kana' => 'テスト',
                'email' => 'test9@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'test10',
                'kana' => 'テスト',
                'email' => 'test10@test.com',
                'password' => Hash::make('password123')
            ],
            ]);
    }
}

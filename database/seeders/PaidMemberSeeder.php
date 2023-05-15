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
            'name' => 'test',
            'kana' => 'タナカ',
            'email' => 'test@test.com',
            'password' => Hash::make('password123')
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PaidMemberProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paid_member_profiles')->insert([
            'paid_member_id' => 1,
            'nick_name' => '五条悟',
            'greeting' => 'こんにちは。五条悟です。こんにちは。五条悟です。こんにちは。五条悟です。こんにちは。五条悟です。',
            'filename' => ''
            ]);
    }
}

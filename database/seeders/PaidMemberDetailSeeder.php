<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PaidMemberDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paid_member_details')->insert([
            [
                'paid_member_id' => '1',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '2',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '3',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '4',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '5',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '6',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '7',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '8',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '9',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            [
                'paid_member_id' => '10',
                'nick_name' => '',
                'greeting' => '',
                'filename' => '',
            ],
            ]);
    }
}

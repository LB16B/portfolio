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
            'paid_member_id' => '1',
            'nick_name' => 'test',
            'greeting' => 'ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。',
            'filename' => '',
            ]);
    }
}

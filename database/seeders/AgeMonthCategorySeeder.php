<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeMonthCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('age_month_categories')->insert([
            [
            'name' => '0 ~ 4ヶ月頃',
            ],
            [
            'name' => '5 ~ 6ヶ月頃',
            ],
            [
            'name' => '7 ~ 8ヶ月頃',
            ],
            [
            'name' => '9 ~ 11ヶ月頃',
            ],
            [
            'name' => '1 ~ 2歳頃',
            ],

        ]);
    }
}

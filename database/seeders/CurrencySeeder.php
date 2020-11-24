<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currency')
            ->insert([
                'char_code' => 'RUR',
                'nominal' => 1,
                'name' => 'Российский рубль',
                'value' => 1,
            ]);
        DB::table('currency')->insert([
                'char_code' => 'USD',
                'nominal' => 1,
                'name' => 'Доллар США',
                'value' => 75.76,
            ]);
        DB::table('currency')->insert([
                'char_code' => 'AZN',
                'nominal' => 1,
                'name' => 'Азербайджанский манат',
                'value' => 44.5909,
            ]);
        DB::table('currency')->insert([
                'char_code' => 'BYN',
                'nominal' => 1,
                'name' => 'Белорусский рубль',
                'value' => 29.7506,
            ]);
        DB::table('currency')->insert([
                'char_code' => 'BGN',
                'nominal' => 1,
                'name' => 'Болгарский лев',
                'value' => 45.9569,
            ]);
        DB::table('currency')->insert([
                'char_code' => 'BRL',
                'nominal' => 1,
                'name' => 'Бразильский реал',
                'value' => 14.08,
            ]);
        DB::table('currency')->insert([
                'char_code' => 'EUR',
                'nominal' => 1,
                'name' => 'Евро',
                'value' => 90.17,
            ]);
        DB::table('currency')->insert([
                'char_code' => 'CNY',
                'nominal' => 1,
                'name' => 'Китайский юань',
                'value' => 11.5326,
            ]);
    }
}

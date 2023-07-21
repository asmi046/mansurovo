<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SemenaAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        php_uname();


        DB::table("options")->insert(
            [
                [
                    "name" => "semenabuy_bottom_text",
                    "type" => "rich",
                    'title' => 'Информация о продаже семян (Низ)',
                    "value" => file_get_contents(public_path('texts//SemenaBott.html')),
                ],

                [
                    "name" => "semenabuy_top_text",
                    "type" => "rich",
                    'title' => 'Информация о продаже семян (верх)',
                    "value" => file_get_contents(public_path('texts//SemenaTop.html')),
                ],

                [
                    "name" => "semenabuy_table",
                    "type" => "rich",
                    'title' => 'Информация о продаже семян (таблица)',
                    "value" => "",
                ],
            ]);
    }
}

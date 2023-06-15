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
                    "name" => "semenabuy",
                    "type" => "rich",
                    'title' => 'Информация о продаже семян',
                    "value" => file_get_contents(public_path('texts//ZernaTable.html')),
                    // "value" => "Тест <b>текста</b>",
                ],
            ]);
    }
}

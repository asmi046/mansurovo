<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class AboutSeeder extends Seeder
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
                    "name" => "about_company",
                    "type" => "rich",
                    'title' => 'О компании',
                    "value" => file_get_contents(public_path('texts//about.txt')),
                ],

            ]);
    }
}

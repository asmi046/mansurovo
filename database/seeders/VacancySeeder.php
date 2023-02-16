<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $main_data = [
            [
                'name' => "Тракторист-машинист с/х производства",
                'place' => "Мансурово",
                'grafic' => "5/2",
                'price' => 0,
                'ob' => "Согласно профессии",
                'treb' => "Среднее образование",
                'usl' => "<ul>".
                "<li>оформление согласно ТК РФ</li>".
                "<li>достойную заработную плату</li>".
                "<li>соц. пакет</li>".
                "<li>хорошие условия труда.</li>".
                "</ul>"
            ],

            [
                'name' => "Комбайнеры",
                'place' => "Мансурово",
                'grafic' => "5/2",
                'price' => 0,
                'ob' => "Согласно профессии",
                'treb' => "Среднее образование",
                'usl' =>"<ul>".
                "<li>оформление согласно ТК РФ</li>".
                "<li>достойную заработную плату</li>".
                "<li>соц. пакет</li>".
                "<li>хорошие условия труда.</li>".
                "</ul>",
            ],

            [
                'name' => "Слесари-ремонтники",
                'place' => "Мансурово",
                'grafic' => "5/2",
                'price' => 0,
                'ob' => "Согласно профессии",
                'treb' => "Среднее образование",
                'usl' =>"<ul>".
                "<li>оформление согласно ТК РФ</li>".
                "<li>достойную заработную плату</li>".
                "<li>соц. пакет</li>".
                "<li>хорошие условия труда.</li>".
                "</ul>",
            ],

            [
                'name' => "Электромонтеры",
                'place' => "Мансурово",
                'grafic' => "5/2",
                'price' => 0,
                'ob' => "Согласно профессии",
                'treb' => "Среднее образование",
                'usl' =>"<ul>".
                "<li>оформление согласно ТК РФ</li>".
                "<li>достойную заработную плату</li>".
                "<li>соц. пакет</li>".
                "<li>хорошие условия труда.</li>".
                "</ul>",
            ],
        ];

        DB::table("vacancies")->insert($main_data);
    }
}

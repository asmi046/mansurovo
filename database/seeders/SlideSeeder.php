<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class SlideSeeder extends Seeder
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
                'title' => "Агрокомплекс <br/> «Мансурово»",
                'img' => "bn1.webp",
                'subtitle' => "Творчество в сфере агропромышленности <br/> с активным использованием инноваций",
                'value1' => "23.8 Га",
                'comment1' => "Собственной пашни",
                'value2' => "3291 +",
                'comment2' => "Поголовье КРС",
                'value3' => "40 000 тон",
                'comment3' => "Элеватор силосного типа",
                'value4' => "175",
                'comment4' => "Единиц сельскохоз техники",
            ],

            [
                'title' => "Животноводческий <br/> комплекс",
                'img' => "bn2.webp",
                'subtitle' => "Устойчивое развитие по<br/> основным направлениям",
                'value1' => "3290 +",
                'comment1' => "Поголовье КРС",
                'value2' => "900 +",
                'comment2' => "Овец куйбышевской породы",
                'value3' => "102",
                'comment3' => "Лошади русской рысистой породы",
                'value4' => "50 +",
                'comment4' => "ульев собственная пасека",
            ],

            [
                'title' => "Растениеводство и<br/> семеноводство",
                'img' => "bn3.webp",
                'subtitle' => "Полное обеспечение собственным<br/> посевным материалом",
                'value1' => "23,8 Га",
                'comment1' => "Собственной пашни",
                'value2' => "93 400 тон",
                'comment2' => "Валовый сбор в 2022г.",
                'value3' => "9 +",
                'comment3' => "Возделываемых культур",
                'value4' => "175",
                'comment4' => "Единиц сельскохоз техники",
            ],

            [
                'title' => "Коневодство <br/> «Коный завод №12»",
                'img' => "bn4.webp",
                'subtitle' => "Сохраняем традиции коневодства<br/> в нашем регионе",
                'value1' => "102",
                'comment1' => "Лошади русской рысистой породы",
                'value2' => "200 лет",
                'comment2' => "Истории предприятия",
                'value3' => "20 лет",
                'comment3' => "Селекционной работы",
                'value4' => "175 +",
                'comment4' => "Наград на соревнованиях",
            ],

            [
                'title' => "Овцеводство",
                'img' => "bn5.webp",
                'subtitle' => "Устойчивый рост поголовья <br/> овец куйбашевской породв",
                'value1' => "900 +",
                'comment1' => "Овец куйбышевской породы",
                'value2' => "до 100 кг",
                'comment2' => "Мраморного мяса с овцы",
                'value3' => "до 7 кг",
                'comment3' => "Теплой шерсти с овцы",
                'value4' => "10%",
                'comment4' => "Прирост поголовья за 2022г.",
            ],
        ];

        foreach($main_data as $item) {
            Storage::disk('public')->put($item["img"], file_get_contents(public_path('img/main/'.$item["img"])), 'public');
        }

        for ($i = 0; $i<count($main_data); $i++) {
            $main_data[$i]["img"] = Storage::url($main_data[$i]["img"]);
        }

        DB::table("slides")->insert($main_data);

    }
}

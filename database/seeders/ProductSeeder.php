<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;


class ProductSeeder extends Seeder
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
                'title' => "АЛЕКСЕИЧ",
                'slug' => Str::slug("АЛЕКСЕИЧ"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "alekseich_04.jpg",
                'img2' => "alekseich_01.jpg",
                'img3' => "alekseich_03.jpg",
                'img4' => "alekseich_02.jpg",
                'description' => file_get_contents(public_path('facer/text/alekseich.html'))
            ],

            [
                'title' => "БЕЗОСТАЯ 100",
                'slug' => Str::slug("БЕЗОСТАЯ 100"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "bezostaya_01.jpg",
                'img2' => "bezostaya_02.jpg",
                'img3' => "bezostaya_03.jpg",
                'img4' => "bezostaya_04.jpg",
                'description' => file_get_contents(public_path('facer/text/bezostaya_100.html'))
            ],

            [
                'title' => "БУМБА",
                'slug' => Str::slug("БУМБА"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "bumba_01.jpg",
                'img2' => "bumba_02.jpg",
                'img3' => "bumba_03.jpg",
                'img4' => "bumba_04.jpg",
                'description' => file_get_contents(public_path('facer/text/bumba.html'))
            ],

                [
                'title' => "ГОМЕР",
                'slug' => Str::slug("ГОМЕР"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "gomer_01.jpg",
                'img2' => "gomer_02.jpg",
                'img3' => "gomer_03.jpg",
                'img4' => "gomer_04.jpg",
                'description' => file_get_contents(public_path('facer/text/gomer.html'))
                ],
                [
                'title' => "ГЕРДА",
                'slug' => Str::slug("ГЕРДА"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "gerda_01.jpg",
                'img2' => "gerda_02.jpg",
                'img3' => "gerda_03.jpg",
                'img4' => "gerda_04.jpg",
                'description' => file_get_contents(public_path('facer/text/gerda.html'))
                ],
                [
                'title' => "ГРАФ",
                'slug' => Str::slug("ГРАФ"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "graf_01.jpg",
                'img2' => "graf_02.jpg",
                'img3' => "graf_03.jpg",
                'img4' => "graf_04.jpg",
                'description' => file_get_contents(public_path('facer/text/graf.html'))
                ],
                [
                'title' => "ГРОМ",
                'slug' => Str::slug("ГРОМ"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "gnom_01.jpg",
                'img2' => "gnom_02.jpg",
                'img3' => "gnom_03.jpg",
                'img4' => "gnom_04.jpg",
                'description' => file_get_contents(public_path('facer/text/gnom.html'))
                ],
                [
                'title' => "ГУРТ",
                'slug' => Str::slug("ГУРТ"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "gurt_01.jpg",
                'img2' => "gurt_02.jpg",
                'img3' => "gurt_03.jpg",
                'img4' => "gurt_04.jpg",
                'description' => file_get_contents(public_path('facer/text/gurt.html'))
                ],
                [
                'title' => "ИЛИАДА",
                'slug' => Str::slug("ИЛИАДА"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "iliada_01.jpg",
                'img2' => "iliada_02.jpg",
                'img3' => "iliada_03.jpg",
                'img4' => "iliada_04.jpg",
                'description' => file_get_contents(public_path('facer/text/iliada.html'))
                ],

                [
                'title' => "КЛАССИКА",
                'slug' => Str::slug("КЛАССИКА"),
                'quote' => '',
                'category' => "Семена",
                'subtype' => 'Пшеница яровая',
                'img1' => "classic_01.jpg",
                'img2' => "classic_02.jpg",
                'img3' => "classic_03.jpg",
                'img4' => "classic_04.jpg",
                'description' => file_get_contents(public_path('facer/text/classic.html'))
                ],
                // -------------
                [
                    'title' => "РОВНЯ",
                    'slug' => Str::slug("РОВНЯ"),
                    'quote' => '',
                    'category' => "Семена",
                    'subtype' => 'Тритикале озимое',

                    'img1' => "ttkl_all.webp",
                    'img2' => "",
                    'img3' => "",
                    'img4' => "",
                    'description' => file_get_contents(public_path('facer/text/rovnya.html'))
                ],

                    [
                    'title' => "ТИМУР",
                    'slug' => Str::slug("ТИМУР"),
                    'quote' => '',
                    'category' => "Семена",
                    'subtype' => 'Тритикале озимое',
                    'img1' => "ttkl_all.webp",
                    'img2' => "",
                    'img3' => "",
                    'img4' => "",
                    'description' => file_get_contents(public_path('facer/text/timur.html'))
                    ],
                    [
                    'title' => "КУРЬЕР",
                    'slug' => Str::slug("КУРЬЕР"),
                    'quote' => '',
                    'category' => "Семена",
                    'subtype' => 'Пшеница яровая',
                    'img1' => "ttkl_all.webp",
                    'img2' => "",
                    'img3' => "",
                    'img4' => "",
                    'description' => file_get_contents(public_path('facer/text/courier.html'))
                    ],
                    [
                    'title' => "ЛЕО",
                    'slug' => Str::slug("ЛЕО"),
                    'quote' => '',
                    'category' => "Семена",
                    'subtype' => 'Пшеница двуручка',
                    'img1' => "ttkl_all.webp",
                    'img2' => "",
                    'img3' => "",
                    'img4' => "",
                    'description' => file_get_contents(public_path('facer/text/leo.html'))
                    ],
                    [
                    'title' => "ХЛЕБОРОБ",
                    'slug' => Str::slug("ХЛЕБОРОБ"),
                    'quote' => '',
                    'category' => "Семена",
                    'subtype' => 'Тритикале озимое',
                    'img1' => "ttkl_all.webp",
                    'img2' => "",
                    'img3' => "",
                    'img4' => "",
                    'description' => file_get_contents(public_path('facer/text/hleborob.html'))
                    ],

                [
                'title' => "Овца куйбышевской породы",
                'slug' => Str::slug("Овца куйбышевской породы"),
                'quote' => '',
                'category' => "Овцы",
                'subtype' => '',
                'img1' => "beee_01.webp",
                'img2' => "beee_02.webp",
                'img3' => "",
                'img4' => "",
                'description' => file_get_contents(public_path('facer/text/beee_k.html'))
                ],

                [
                'title' => "Горох",
                'slug' => Str::slug("Горох"),
                'quote' => 'Горох высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "goroh_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Горох высшего качества собственного производства"
                ],

                [
                'title' => "Кукуруза",
                'slug' => Str::slug("Кукуруза"),
                'quote' => 'Кукуруза высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "kukuruza_dr_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Кукуруза высшего качества собственного производства"
                ],

                [
                'title' => "Овес",
                'slug' => Str::slug("Овес"),
                'quote' => 'Овес высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "oves_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Овес высшего качества собственного производства"
                ],

                [
                'title' => "Подсолнечник",
                'slug' => Str::slug("Подсолнечник"),
                'quote' => 'Подсолнечник высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "podsolnehnik_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Подсолнечник высшего качества собственного производства"
                ],

                [
                'title' => "Пшеница озимая и яровая",
                'slug' => Str::slug("Пшеница озимая и яровая"),
                'quote' => 'Пшеница озимая и яровая высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "phenitsa5_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Пшеница озимая и яровая высшего качества собственного производства"
                ],

                [
                'title' => "Соя",
                'slug' => Str::slug("Соя"),
                'quote' => 'Соя высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "soya_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Соя высшего качества собственного производства"
                ],

                [
                'title' => "Тритикале",
                'slug' => Str::slug("Тритикале"),
                'quote' => 'Тритикале высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "tretikale_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Тритикале высшего качества собственного производства'"
                ],

                [
                'title' => "Эспарцет",
                'slug' => Str::slug("Эспарцет"),
                'quote' => 'Эспарцет высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "esparset_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Эспарцет высшего качества собственного производства'"
                ],

                [
                'title' => "Ячмень",
                'slug' => Str::slug("Ячмень"),
                'quote' => 'Ячмень высшего качества собственного производства',
                'category' => "Растениеводство",
                'subtype' => '',
                'img1' => "yahmen_01.webp",
                'img2' => "",
                'img3' => "",
                'img4' => "",
                'description' => "Ячмень высшего качества собственного производства"
                ]
            ];

        foreach($main_data as $item) {
            if (!empty($item["img1"])) Storage::disk('public')->put($item["img1"], file_get_contents(public_path('facer/img/'.$item["img1"])), 'public');

            if (!empty($item["img2"])) Storage::disk('public')->put($item["img2"], file_get_contents(public_path('facer/img/'.$item["img2"])), 'public');

            if (!empty($item["img3"])) Storage::disk('public')->put($item["img3"], file_get_contents(public_path('facer/img/'.$item["img3"])), 'public');

            if (!empty($item["img4"])) Storage::disk('public')->put($item["img4"], file_get_contents(public_path('facer/img/'.$item["img4"])), 'public');
        }

        for ($i = 0; $i<count($main_data); $i++) {
            if (!empty($main_data[$i]["img1"])) $main_data[$i]["img1"] = Storage::url($main_data[$i]["img1"]);
            if (!empty($main_data[$i]["img2"])) $main_data[$i]["img2"] = Storage::url($main_data[$i]["img2"]);
            if (!empty($main_data[$i]["img3"])) $main_data[$i]["img3"] = Storage::url($main_data[$i]["img3"]);
            if (!empty($main_data[$i]["img4"])) $main_data[$i]["img4"] = Storage::url($main_data[$i]["img4"]);
        }

        DB::table("products")->insert($main_data);
    }
}

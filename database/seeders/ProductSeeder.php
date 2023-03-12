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
                'img1' => "classic_01.jpg",
                'img2' => "classic_02.jpg",
                'img3' => "classic_03.jpg",
                'img4' => "classic_04.jpg",
                'description' => file_get_contents(public_path('facer/text/classic.html'))
                ],

                [
                'title' => "Овца куйбышевской породы",
                'slug' => Str::slug("Овца куйбышевской породы"),
                'quote' => '',
                'category' => "Овцы",
                'img1' => "beee_01.webp",
                'img2' => "beee_02.webp",
                'img3' => "",
                'img4' => "",
                'description' => file_get_contents(public_path('facer/text/beee_k.html'))
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

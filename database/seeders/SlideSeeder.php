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
                'value1' => "3788 +",
                'comment1' => "Голов крупного рогатого",
                'value2' => "24 000 +",
                'comment2' => "Гектара земли в ежегодно",
                'value3' => "320 +",
                'comment3' => "Гектара производственных пощадей",
                'value4' => "220 +",
                'comment4' => "Единиц самоходной техники крупнейших производителей",
            ],

            [
                'title' => "Агрокомплекс <br/> «Мансурово»",
                'img' => "bn2.webp",
                'subtitle' => "Творчество в сфере агропромышленности <br/> с активным использованием инноваций",
                'value1' => "3788 +",
                'comment1' => "Голов крупного рогатого",
                'value2' => "24 000 +",
                'comment2' => "Гектара земли в ежегодно",
                'value3' => "320 +",
                'comment3' => "Гектара производственных пощадей",
                'value4' => "220 +",
                'comment4' => "Единиц самоходной техники крупнейших производителей",
            ],

            [
                'title' => "Агрокомплекс <br/> «Мансурово»",
                'img' => "bn3.webp",
                'subtitle' => "Творчество в сфере агропромышленности <br/> с активным использованием инноваций",
                'value1' => "3788 +",
                'comment1' => "Голов крупного рогатого",
                'value2' => "24 000 +",
                'comment2' => "Гектара земли в ежегодно",
                'value3' => "320 +",
                'comment3' => "Гектара производственных пощадей",
                'value4' => "220 +",
                'comment4' => "Единиц самоходной техники крупнейших производителей",
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

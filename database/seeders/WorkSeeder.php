<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class WorkSeeder extends Seeder
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
                'title' => 'Растениеводство',
                'quote'  => 'Земельный банк компании насчитывает более 26 000 гектаров и расположен на территории трех районов Курской области.',
                'img' => 'rast.webp',
                'lnk' => 'work/rastenevodstvo',
                'order' => 1
            ],

            [
                'title' => 'Животноводство',
                'quote'  => 'Наша компания располагает стадом 3 788 голов крупного рогатого скота фуражных и мясных пород',
                'img' => 'giv.webp',
                'lnk' => 'work/givotnovodstvo',
                'order' => 2
            ],

            [
                'title' => 'Конезавод',
                'quote'  => '«Александровский конный завод №12», старейшее предприятие Курской области. Ведет свою историю с начала XIX века. Предприятие разводит лошадей пород русская рысистая и шетлендский пони.',
                'img' => 'hosez.webp',
                'lnk' => 'work/konezavod',
                'order' => 1
            ],


        ];

        foreach($main_data as $item) {
            Storage::disk('public')->put($item["img"], file_get_contents(public_path('img/directions/'.$item["img"])), 'public');
        }

        for ($i = 0; $i<count($main_data); $i++) {
            $main_data[$i]["img"] = Storage::url($main_data[$i]["img"]);
        }

        DB::table("works")->insert($main_data);
    }
}

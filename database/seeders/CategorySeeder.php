<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class CategorySeeder extends Seeder
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
                'name' => "Молоко",
                'title' => "Молоко",
                'slug' => Str::slug("Молоко"),
                'img' => "cow.webp",
                'banner' => "cow_hb.webp",
                'quote' => "Предлагаем лошадей и жеребят от Александровского конезавода",
                'description' => "",

                "seo_title" => 'Молоко',
                "seo_description" => 'Предлагаем лошадей и жеребят от Александровского конезавода',
            ],

            [
                'name' => "Лошади",
                'title' => "Лошади",
                'slug' => Str::slug("Лошади"),
                'img' => "hors.webp",
                'banner' => "hoses_hb.webp",
                'quote' => "Предлагаем лошадей и жеребят от Александровского конезавода",
                'description' => "",

                "seo_title" => 'Лошади',
                "seo_description" => 'Предлагаем лошадей и жеребят от Александровского конезавода',

            ],


            [
                'name' => "Семена",
                'title' => "Семена",
                'slug' => Str::slug("Семена"),
                'img' => "zerno.webp",
                'banner' => "zerno_hb.webp",
                'quote' => "Семеной материал высокого качества",
                'description' => "",

                "seo_title" => 'Семена',
                "seo_description" => 'Семеной материал высокого качества',
            ],

            [
                'name' => "Мед",
                'title' => "Мед",
                'slug' => Str::slug("Мед"),
                'img' => "hony.webp",
                'banner' => "hony_hb.webp",
                'quote' => "Предлагаем мед и продукты пчеловодства с собственных пасек",
                'description' => "",

                "seo_title" => 'Мед',
                "seo_description" => 'Предлагаем мед и продукты пчеловодства с собственных пасек',
            ],

            [
                'name' => "Овцы",
                'title' => "Овцы",
                'slug' => Str::slug("Овцы"),
                'img' => "beee.webp",
                'banner' => "beee_hb.webp",
                'quote' => "Овцы куйбышевской породы относится к длинношерстной, полутонкорунной группе мясошерстного направления",
                'description' => "",

                "seo_title" => 'Овцы',
                "seo_description" => 'Овцы куйбышевской породы относится к длинношерстной, полутонкорунной группе мясошерстного направления',
            ],

            [
                'name' => "Растениеводство",
                'title' => "Растениеводство",
                'slug' => Str::slug("Растениеводство"),
                'img' => "rv.webp",
                'banner' => "rv_hb.webp",
                'quote' => "Продукты растениеводства в широком ассортименте, высокое качество.",
                'description' => "",

                "seo_title" => 'Растениеводство',
                "seo_description" => 'Продукты растениеводства в широком ассортименте, высокое качество.',
            ],
        ];

        for ($i = 0; $i<count($main_data); $i++) {
            Storage::disk('public')->put($main_data[$i]["img"], file_get_contents(public_path('facer/img/'.$main_data[$i]["img"])), 'public');
            Storage::disk('public')->put($main_data[$i]["banner"], file_get_contents(public_path('facer/img/'.$main_data[$i]["banner"])), 'public');

            $main_data[$i]["img"] = Storage::url($main_data[$i]["img"]);
            $main_data[$i]["banner"] = Storage::url($main_data[$i]["banner"]);

        }


        DB::table("categories")->insert($main_data);

    }
}

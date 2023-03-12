<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use DB;

class NewsSeeder extends Seeder
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
                'news_data' => "2023.01.01",
                'title' => "Новый год в новом доме",
                'slug' => Str::slug("Новый год в новом доме"),
                'quote' => 'В агрокомплексе «Мансурово» продолжают развивать инфраструктуру и повышать уровень комфорта работников.',
                'thumb' => "nf_2.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_2.html'))
            ],

        ];

        foreach($main_data as $item) {
            Storage::disk('public')->put($item["thumb"], file_get_contents(public_path('facer/img/news_photo/'.$item["thumb"])), 'public');

        }

        for ($i = 0; $i<count($main_data); $i++) {
            $main_data[$i]["thumb"] = Storage::url($main_data[$i]["thumb"]);
        }

        DB::table("news")->insert($main_data);
    }
}

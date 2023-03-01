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
                'news_data' => "2023.01.10",
                'title' => "Сезон 2022",
                'slug' => Str::slug("Сезон 2022"),
                'quote' => 'Беговой сезон 2022 в самом разгаре и «Александровский конный завод №12» активно работает.',
                'thumb' => "nf_1.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_1.html'))
            ],

            [
                'news_data' => "2022.01.10",
                'title' => "Новый год в новом доме",
                'slug' => Str::slug("Новый год в новом доме"),
                'quote' => 'В агрокомплексе «Мансурово» продолжают развивать инфраструктуру и повышать уровень комфорта работников.',
                'thumb' => "nf_2.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_2.html'))
            ],

            [
                'news_data' => "2021.01.10",
                'title' => "Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме",
                'slug' => Str::slug("Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме"),
                'quote' => 'Несмотря на некоторую непогоду и мокрую дорожку праздник и бега успешно состоялись.',
                'thumb' => "nf_3.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_3.html'))
            ],


            [
                'news_data' => "2020.01.10",
                'title' => "Полевые работы идут в срок",
                'slug' => Str::slug("Полевые работы идут в срок"),
                'quote' => 'Лето перешагнуло меридиан, а значит часть работ на полях позади, а уборочная кампания в самом разгаре.',
                'thumb' => "nf_4.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_4.html'))
            ],

            [
                'news_data' => "2023.01.10",
                'title' => "Сезон 2022 #1",
                'slug' => Str::slug("Сезон 2022 #1"),
                'quote' => 'Беговой сезон 2022 в самом разгаре и «Александровский конный завод №12» активно работает.',
                'thumb' => "nf_1.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_1.html'))
            ],

            [
                'news_data' => "2022.01.10",
                'title' => "Новый год в новом доме #1",
                'slug' => Str::slug("Новый год в новом доме #1"),
                'quote' => 'В агрокомплексе «Мансурово» продолжают развивать инфраструктуру и повышать уровень комфорта работников.',
                'thumb' => "nf_2.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_2.html'))
            ],

            [
                'news_data' => "2021.01.10",
                'title' => "Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме #1",
                'slug' => Str::slug("Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме #1"),
                'quote' => 'Несмотря на некоторую непогоду и мокрую дорожку праздник и бега успешно состоялись.',
                'thumb' => "nf_3.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_3.html'))
            ],

            [
                'news_data' => "2020.01.10",
                'title' => "Полевые работы идут в срок #1",
                'slug' => Str::slug("Полевые работы идут в срок #1"),
                'quote' => 'Лето перешагнуло меридиан, а значит часть работ на полях позади, а уборочная кампания в самом разгаре.',
                'thumb' => "nf_4.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_4.html'))
            ],


            [
                'news_data' => "2023.01.10",
                'title' => "Сезон 2022 #2",
                'slug' => Str::slug("Сезон 2022 #2"),
                'quote' => 'Беговой сезон 2022 в самом разгаре и «Александровский конный завод №12» активно работает.',
                'thumb' => "nf_1.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_1.html'))
            ],

            [
                'news_data' => "2022.01.10",
                'title' => "Новый год в новом доме #2",
                'slug' => Str::slug("Новый год в новом доме #2"),
                'quote' => 'В агрокомплексе «Мансурово» продолжают развивать инфраструктуру и повышать уровень комфорта работников.',
                'thumb' => "nf_2.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_2.html'))
            ],

            [
                'news_data' => "2021.01.10",
                'title' => "Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме #2",
                'slug' => Str::slug("Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме #2"),
                'quote' => 'Несмотря на некоторую непогоду и мокрую дорожку праздник и бега успешно состоялись.',
                'thumb' => "nf_3.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_3.html'))
            ],

            [
                'news_data' => "2020.01.10",
                'title' => "Полевые работы идут в срок #2",
                'slug' => Str::slug("Полевые работы идут в срок #2"),
                'quote' => 'Лето перешагнуло меридиан, а значит часть работ на полях позади, а уборочная кампания в самом разгаре.',
                'thumb' => "nf_4.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_4.html'))
            ],

            [
                'news_data' => "2023.01.10",
                'title' => "Сезон 2022 #3",
                'slug' => Str::slug("Сезон 2022 #3"),
                'quote' => 'Беговой сезон 2022 в самом разгаре и «Александровский конный завод №12» активно работает.',
                'thumb' => "nf_1.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_1.html'))
            ],

            [
                'news_data' => "2022.01.10",
                'title' => "Новый год в новом доме #3",
                'slug' => Str::slug("Новый год в новом доме #3"),
                'quote' => 'В агрокомплексе «Мансурово» продолжают развивать инфраструктуру и повышать уровень комфорта работников.',
                'thumb' => "nf_2.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_2.html'))
            ],

            [
                'news_data' => "2021.01.10",
                'title' => "Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме #3",
                'slug' => Str::slug("Итоги забега на Кубок АО «Агрокомплекс «Мансурово» 11 сентября на Курском ипподроме #3"),
                'quote' => 'Несмотря на некоторую непогоду и мокрую дорожку праздник и бега успешно состоялись.',
                'thumb' => "nf_3.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_3.html'))
            ],

            [
                'news_data' => "2020.01.10",
                'title' => "Полевые работы идут в срок #3",
                'slug' => Str::slug("Полевые работы идут в срок #3"),
                'quote' => 'Лето перешагнуло меридиан, а значит часть работ на полях позади, а уборочная кампания в самом разгаре.',
                'thumb' => "nf_4.jpg",
                'description' => file_get_contents(public_path('facer//news_texts//news_4.html'))
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

@extends('layouts.all')

@php
    $title = "Новости компании";
    $description = "Новости компании";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
<x-banner-mini :h1="$title" :subtitle="'Для наших клиентов мы предлагаем лучшую продукцию отвечающую всем стандартам качества'" :img="'img/bg_news.jpg'"></x-banner-mini>

<section class="contacts_text">
    <div class="_container">

        <x-breadcrumbs :title="$title"></x-breadcrumbs>

        <div class="news_years">
            <a href="">2023</a>
            <a href="">2022</a>
            <a href="">2021</a>
            <a href="">2020</a>
            <a href="">2019</a>
            <a href="">2018</a>
        </div>


        <div class="news_in_page news-agro__inner">
            @for ($i = 0; $i<2; $i++)


                <div class="news-agro__column">
                    <div class="news-agro__card">
                        <a href="#" class="news-agro__card-img">
                            <img src="img/news-agro/01.jpg" alt="">
                        </a>
                        <div class="news-agro__card-descp">
                            <span class="news-agro__card-descp-date">25.07.2022</span>
                            <h3 class="news-agro__card-descp-title">
                                «Зерно России – 2021».
                                Как прошел форум и что
                                мы отметили для себя
                            </h3>
                            <a href="#" class="news-agro__card-descp-btn">Подробнее...</a>
                        </div>
                    </div>
                </div>

                <div class="news-agro__column">
                    <div class="news-agro__card">
                        <a href="#" class="news-agro__card-img">
                            <img src="img/news-agro/02.jpg" alt="">
                        </a>
                        <div class="news-agro__card-descp">
                            <span class="news-agro__card-descp-date">04.07.2022</span>
                            <h3 class="news-agro__card-descp-title">
                                Закрытие бегового сезона
                                на Курском ипподроме
                            </h3>
                            <a href="#" class="news-agro__card-descp-btn">Подробнее...</a>
                        </div>
                    </div>
                </div>

                <div class="news-agro__column">
                    <div class="news-agro__card">
                        <a href="#" class="news-agro__card-img">
                            <img src="img/news-agro/03.jpg" alt="">
                        </a>
                        <div class="news-agro__card-descp">
                            <span class="news-agro__card-descp-date">08.05.2022</span>
                            <h3 class="news-agro__card-descp-title">
                                Агрокомплекс «Мансурово»
                                поздравляет с Днем Победы!
                            </h3>
                            <a href="#" class="news-agro__card-descp-btn">Подробнее...</a>
                        </div>
                    </div>
                </div>

                <div class="news-agro__column">
                    <div class="news-agro__card">
                        <a href="#" class="news-agro__card-img">
                            <img src="img/news-agro/04.jpg" alt="">
                        </a>
                        <div class="news-agro__card-descp">
                            <span class="news-agro__card-descp-date">09.07.2019</span>
                            <h3 class="news-agro__card-descp-title">
                                "Курская Коренская ярмарка-2019"
                            </h3>
                            <a href="#" class="news-agro__card-descp-btn">Подробнее...</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

    </div>
</section>

@endsection

@extends('layouts.all')

@php
    $title = "Александровский конезавод №12";
    $description = "Александровский конезавод №12 в составе агрокомплекса Мансурово";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Лучшие традиции российского сельского хозяйства.'" :img="'img/works/hoses_hb.webp'"></x-banner-mini>

    <section class="contacts_text work_np_page text_styles">
        <div class="_container">

            <x-breadcrumbs :napravlenie="$title"></x-breadcrumbs>


            <p>ОАО «Александровский конный завод №12», старейшее предприятие Курской области. Ведет свою историю с начала XIX века.</p>

            <p>В феврале 2012 года контрольный пакет акций конезавода был приобретен АО «Агрокомплекс «Мансурово» и предприятие вошло в состав Агрокомплекса.</p>

            <p>Исполнительным директором конезавода на данный момент является Подкопаев Сергей Иванович. Селекционная работа на предприятии ведется под руководством Надежды Леонидовны Мартыновой.</p>

            <p>Предприятие сохранило юридическую самостоятельность, при этом  концепцию его дальнейшего развития определяет Управляющая компания.</p>

            <p>Александровский конный завод обрабатывает 7219 га земли. В структуре посевных площадей порядка 3 400 га занимают зерновые, в том числе озимая пшеница, ячмень и овес. Также выращиваются рапс, соя и подсолнечник. Урожайность  основных культур в 2012 году составила: озимая пшеница 31.1 ц/га, ячмень 38.4 ц/га, овес 52.6 ц/га. Это выше, чем в среднем по Касторенскому району.</p>

            <p>Советом директоров Агрокомплекса принято решение сохранить и в дальнейшем развивать на 12 конном заводе племенное разведение лошадей, продолжить традиционное направление – растениеводство, а также начать работу по разведению овец куйбышевской породы класса «элита».</p>

            <p>На сегодняшний день завод так же предлагает услуги по содержанию лошадей. Кроме того, на сайте вы можете ознакомиться со списком рысистых, выставленных на продажу.</p>




            <h2>Числовые показатели:</h2>
            <div class="slider-bg__inner">

                <div class="slider-bg__column">
                    <div class="slider-bg__card slider-bg__card_01">
                        <h3 class="slider-bg__card-title">1 200 +</h3>
                        <p class="slider-bg__card-subtitle">
                            Фуражных коров голштинской породы н наших фермах
                        </p>
                    </div>
                </div>

                <div class="slider-bg__column">
                    <div class="slider-bg__card slider-bg__card_02">
                        <h3 class="slider-bg__card-title">500 +</h3>
                        <p class="slider-bg__card-subtitle">
                            Племенное стадо овец Куйбышевской породы.
                        </p>
                    </div>
                </div>

            </div>

            <h2>Фотогалерея</h2>

            <div class="swiper_obj mb_30">
                <div class="swiper work_n_galery">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/konezavod/kz_s0.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/konezavod/kz_s1.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/konezavod/kz_s2.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/konezavod/kz_s3.webp')}}" >
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>

        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

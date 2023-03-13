@extends('layouts.all')

@php
    $title = "Растеневодство";
    $description = "Растеневодство (Направление деятельности) в агрокомплексе мансурово";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Система «точного земледелия» на всех посевных площадях и неуклонное повышение урожайности.'" :img="'img/works/zerno_hb.webp'"></x-banner-mini>

    <section class="contacts_text work_np_page">
        <div class="_container">

            <x-breadcrumbs :napravlenie="$title"></x-breadcrumbs>

            <div class="text_styles">
                <p>Земельный банк компании насчитывает порядка 27 000 гектаров и расположен единым массивом  на территории трех районов Курской области - в центре Черноземья (Липецкая, Белгородская, Воронежская, Орловская, Тамбовская области равноудалены на расстояние ~150-200км).</p>

                <p>Более 20 тыс гектаров занимают зерновые и зернобобовые, в том числе пшеница и ячмень.  Выращивается также кукуруза, подсолнечник, соя, многолетние и однолетние травы.</p>


                <p>Главная задача растениеводства — подготовка качественных кормов для собственного поголовья скота, а также реализация продукции на продажу. В 2012 году разработан 5-летний план развития растениеводства, который подразумевает неуклонное повышение урожайности всех видов возделываемых культур.</p>
            </div>

            <h2>Числовые показатели</h2>
            <div class="slider-bg__inner">

                <div class="slider-bg__column">
                    <div class="slider-bg__card slider-bg__card_01">
                        <h3 class="slider-bg__card-title">27 000 +</h3>
                        <p class="slider-bg__card-subtitle">
                            Земли в Центральном Черноземье.
                        </p>
                    </div>
                </div>

                <div class="slider-bg__column">
                    <div class="slider-bg__card slider-bg__card_02">
                        <h3 class="slider-bg__card-title">5 000 +</h3>
                        <p class="slider-bg__card-subtitle">
                            Отведено под зерновые культуры, в том числе пшеницу и ячмень.
                        </p>
                    </div>
                </div>

                <div class="slider-bg__column">
                    <div class="slider-bg__card slider-bg__card_03">
                        <h3 class="slider-bg__card-title">42,1 ц/га</h3>
                        <p class="slider-bg__card-subtitle">
                            Урожайность пшеницы.
                        </p>
                    </div>
                </div>

                <div class="slider-bg__column">
                    <div class="slider-bg__card slider-bg__card_04">
                        <h3 class="slider-bg__card-title">в 35 раз</h3>
                        <p class="slider-bg__card-subtitle">
                            с 2010 года увеличилась общая площадь земельного банка АО «Агрокомплекс «Мансурово».
                        </p>
                    </div>
                </div>

            </div>

            <h2>Урожайность основных культур по результатам 2022 года (усредненная статистика):</h2>

            <div class="text_styles">
                <ul class="list_kv">
                    <li>Озимая пшеница – 62,4 ц/га</li>
                    <li>Яровая пшеница – 42,1 ц/га</li>
                    <li>Ячмень – 38,5 ц/га</li>
                    <li>Тритикале – 57,6 ц/га</li>
                    <li>Кукуруза – 56 ц/га</li>
                    <li>Подсолнечник – 30,6 ц/га</li>
                    <li>Соя – 25,3 ц/га</li>
                    <li>Горох – 45 ц/га</li>
                </ul>
            </div>


            <h2>Фотогалерея</h2>

            <div class="swiper_obj mb_30">
                <div class="swiper work_n_galery">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/rastenevodstvo/rv_s0.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/rastenevodstvo/rv_s1.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/rastenevodstvo/rv_s2.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/rastenevodstvo/rv_s3.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/rastenevodstvo/rv_s4.webp')}}" >
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

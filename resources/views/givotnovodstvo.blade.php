@extends('layouts.all')

@php
    $title = "Животноводство";
    $description = "Животноводство (Направление деятельности) в агрокомплексе Мансурово";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-banner-mini :h1="$title" :subtitle="'От выращивания кормовой базы до конечного продукта.'" :img="'img/works/cow_hb.webp'"></x-banner-mini>

    <section class="contacts_text work_np_page text_styles">
        <div class="_container">

            <x-breadcrumbs :napravlenie="$title"></x-breadcrumbs>


            <p>Большую часть занимает молочно-товарная ферма. Численность крупного рогатого скота (КРС) компании, составляет 3 788 голов. Из них 1570 фуражных коров. Поголовье КРС размещено на двух площадках – новой молочно-товарной ферме на 1200 голов (строящийся комплекс в районе с.Крестище, Советский район) и на ферме с привязным содержанием коров (на базе предприятия ООО «Сельские зори», Тимский район).</p>

            <p>Предполагается строительство свинокомплекса в районе с. Крестищи, рассчитанного на откорм 55000-60000 свиней в год.</p>

            <p>Поголовье овец размещено на базе компании под управлением ОАО «Александровский конный завод №12». Это племенное стадо мясошерстной куйбышевской породы.</p>

            <h3>
                    Животноводческий комплекс компании  развивается в двух направлениях: разведение крупного рогатого скота и овцеводство.
            </h3>




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
                            Племенное стадо овец куйбышевской породы.
                        </p>
                    </div>
                </div>

            </div>

            <h2>Разведение КРС:</h2
                >
                    <p>Молочно-товарная ферма (МТФ) Агрокомплекса рассчитана на 1200 фуражных коров. МТФ – это три типа животноводческих помещений: коровники (с родильным отделением и доильным залом),  телятники и откормочная площадка для бычков. </p>

                    <p>Поставщик основного технологического оборудования МТФ – компания GEA Farm Technologies.</p>

                    <p>Животноводы делают ставку на высокий генетический потенциал скота, полнообъемное и полноценное кормление (в первую очередь собственными кормами) и  комплексное управление воспроизводственным циклом.</p>

                    <p>Средний надой молока в сутки на одну корову породы голштины составляет 30 кг.</p>

                    <p>На ферме компании под управлением  (ООО «Сельские зори», Тимский район), привязным способом содержится поголовье КРС местных пород, в том числе дойное стадо. </p>

                    <p>Для улучшения производственных показателей фермы, а также создания благоприятных условий для работы, в 2012 году в ООО «Сельские зори» был проведен капитальный ремонт основных помещений коровников, завезено новое оборудование, налажена заготовка качественных кормов, внедрена технология холодного содержания телят.</p>

                    <p>Средний надой молока в сутки на одну корову местной породы составляет 12,5 кг.</p>

                <h2>Овцеводство:</h2>

                <p>Первая партия овец была приобретена еще в августе 2012 года, в количестве 700 голов. </p>

                <p>Это элитные овцы куйбышевской породы.</p>

                <p>Порода была выведена в 30-40 гг. XX века в Самарской (тогда Куйбышевской) области. Основой для селекции стали местные грубошерстные овцы черкасской породы и английские полутонкорунные скороспелые мясные бараны породы «ромни-марш», широко известные во всем мире. Авторский коллектив был удостоен Государственной (Сталинской) премии. Куйбышевские овцы скороспелые, с высокой степенью мраморности мяса (с жировыми отложениями между мышечными волокнами), что придает ему нежность и сочность. Убойный выход составляет 52-60%.</p>

                <p>Поголовье овец размещено на базе ОАО «Александровский конный завод№12».  Для этого проведен капитальный ремонт помещений свинарников, которые пустовали в д. Раздолье (Касторенский район) почти 10 лет.</p>


            <h2>Фотогалерея</h2>

            <div class="swiper_obj mb_30">
                <div class="swiper work_n_galery">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/givotnovodstvo/gv_s0.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/givotnovodstvo/gv_s1.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/givotnovodstvo/gv_s2.webp')}}" >
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('img/works/givotnovodstvo/gv_s3.webp')}}" >
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
@extends('layouts.all')

@php
    $title = "Направления деятельности";
    $description = "Направления деятельности";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Ответственный подход к производству и точное планирование залог нашего успеха'" :img="'img/bg_napr_d.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">

            <x-breadcrumbs :title="$title"></x-breadcrumbs>

            <div class="works_wrapper">

                <div class="work_block">
                    <div class="work_text">
                        <h2>Растеневодство</h2>
                        <p>Земельный банк компании насчитывает порядка 27 000 гектаров и расположен единым массивом  на территории трех районов Курской области. Мы выращиваем: озимую и яровую пшеницу овес, ячмень, подсолнечник, кукурузу, сою.</p>
                        <a href="" class="btn">Подробнее</a>
                    </div>

                    <div class="work_img">
                        <img src="{{asset('img/directions/rast.webp')}}" alt="">
                    </div>
                </div>

                <div class="work_block">
                    <div class="work_text">
                        <h2>Животноводство</h2>
                        <p>Полный цикл производства от выращивания кормовой базы до поставок готовой продукции. Наша компания располагает стадом  3 788  голов крупного рогатого скота фуражных и мясных пород</p>
                        <a href="" class="btn">Подробнее</a>
                    </div>

                    <div class="work_img">
                        <img src="{{asset('img/directions/giv.webp')}}" alt="">
                    </div>
                </div>

                <div class="work_block">
                    <div class="work_text">
                        <h2>Конезавод</h2>
                        <p>«Александровский конный завод №12», старейшее предприятие Курской области. Ведет свою историю с начала XIX века. Предприятие разводит лошадей пород русская рысистая и шетлендский пони.</p>
                        <a href="" class="btn">Подробнее</a>
                    </div>

                    <div class="work_img">
                        <img src="{{asset('img/directions/hosez.webp')}}" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

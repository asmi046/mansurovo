@extends('layouts.all')

@php
    $title = "Продукты нашего агрохолдинга";
    $description = "Продукты нашего агрохолдинга";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Для наших клиентов мы предлагаем лучшую продукцию отвечающую всем стандартам качества'" :img="'img/bg_napr_d.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">

            <x-breadcrumbs :title="$title"></x-breadcrumbs>
            <div class="products_in_page">
                <div class="product">
                    <img src="{{}}" alt="">
                    <div class="text">
                        <h2>Молоко</h2>
                        <p>Предлагаем лошадей и жеребят от Александровского конезавода</p>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>

                <div class="product">
                    <img src="{{}}" alt="">
                    <div class="text">
                        <h2>Лошади</h2>
                        <p>Предлагаем лошадей и жеребят от Александровского конезавода</p>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>

                <div class="product">
                    <img src="{{}}" alt="">
                    <div class="text">
                        <h2>Зерно</h2>
                        <p>Зерновой материал для дальнейшей переработки</p>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>

                <div class="product">
                    <img src="{{}}" alt="">
                    <div class="text">
                        <h2>Мед</h2>
                        <p>Предлагаем мед и продукты пчеловодства с собственных пасек</p>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

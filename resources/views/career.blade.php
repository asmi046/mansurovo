@extends('layouts.all')

@php
    $title = "Карьера";
    $description = "Карьера";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Мы всегда заинтересованы в привлечении целеустремленных, инициативных, энергичных и творческих людей.'" :img="'img/bg_carier.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">
            <x-breadcrumbs :title="$title"></x-breadcrumbs>

            <div class="career_wriper">

                <div class="carieer_blk">
                    <div class="career_heder">
                        <div class="text">
                            <h2>Зоотехник</h2>
                            <div class="more">
                                <span>Площадка: Мансурово</span>
                                <span>График: 5/2</span>
                                <span>Зарплата: от 25000 р.</span>
                            </div>
                        </div>
                        <div class="control">
                            <a href="" class="flip_control"></a>
                        </div>
                    </div>

                    <div class="career_body">
                        <div class="cbb obiaz">
                            <ul>
                                <li>Приёмка, хранение и выдача готовой резиновой технической продукции</li>
                                <li>Работа с документами, проведение ревизий, ведение отчётности</li>
                            </ul>
                        </div>

                        <div class="cbb treb">
                            <ul>
                                <li>Опыт работы по приему, учету, отгрузке готовой продукции.</li>
                            </ul>
                        </div>

                        <div class="cbb ysl">
                            <ul>
                                <li>Стабильная работа в производственной компании</li>
                                <li>График работы 5/2, 8-ми часовой рабочий день</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>
@endsection
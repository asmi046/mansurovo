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
                @foreach ($vacancy as $item)

                    <div class="carieer_blk">
                        <div class="career_heder">
                            <div class="text">
                                <h2>{{$item->name}}</h2>
                                <div class="more">
                                    <span>Площадка: {{$item->place}}</span>
                                    <span>График: {{$item->grafic}}</span>
                                    @if ($item->price ==0)
                                        <span>Зарплата: по итогам собеседования</span>
                                    @else
                                        <span>Зарплата: от {{$item->price}} р.</span>
                                    @endif

                                </div>
                            </div>
                            <div class="control">
                                <a href="" class="flip_control"></a>
                            </div>
                        </div>

                        <div class="career_body">
                            <div class="cbb obiaz">
                                <h3>Обязанности</h3>
                                {!! $item->ob !!}
                            </div>

                            <div class="cbb treb">
                                <h3>Требования</h3>
                                {!! $item->treb !!}
                            </div>

                            <div class="cbb ysl">
                                <h3>Условия</h3>
                                {!! $item->usl !!}
                            </div>

                        </div>
                    </div>

                @endforeach

                {{-- <div class="carieer_blk">
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
                            <h3>Обязанности</h3>
                            <ul>
                                <li>Приёмка, хранение и выдача готовой резиновой технической продукции</li>
                                <li>Работа с документами, проведение ревизий, ведение отчётности</li>
                            </ul>
                        </div>

                        <div class="cbb treb">
                            <h3>Требования</h3>
                            <ul>
                                <li>Опыт работы по приему, учету, отгрузке готовой продукции.</li>
                            </ul>
                        </div>

                        <div class="cbb ysl">
                            <h3>Условия</h3>
                            <ul>
                                <li>Стабильная работа в производственной компании</li>
                                <li>График работы 5/2, 8-ми часовой рабочий день</li>
                            </ul>
                        </div>

                    </div>
                </div>

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
                            <h3>Обязанности</h3>
                            <ul>
                                <li>Приёмка, хранение и выдача готовой резиновой технической продукции</li>
                                <li>Работа с документами, проведение ревизий, ведение отчётности</li>
                            </ul>
                        </div>

                        <div class="cbb treb">
                            <h3>Требования</h3>
                            <ul>
                                <li>Опыт работы по приему, учету, отгрузке готовой продукции.</li>
                            </ul>
                        </div>

                        <div class="cbb ysl">
                            <h3>Условия</h3>
                            <ul>
                                <li>Стабильная работа в производственной компании</li>
                                <li>График работы 5/2, 8-ми часовой рабочий день</li>
                            </ul>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>
@endsection

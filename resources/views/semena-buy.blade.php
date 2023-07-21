@extends('layouts.all')

@php
    $title = "Семена озимой и яровой пшеницы от производителя";
    $description = "Семена озимой и яровой пшеницы от производителя, выгодные цены, доставка по РФ. Крупный и средний опт.";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Для наших клиентов мы предлагаем лучшую продукцию отвечающую всем стандартам качества'" :img="'img/bg_carier.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">

            <x-breadcrumbs :title="$title"></x-breadcrumbs>

            <div class="description_blk text_styles">
                {!! $options['semenabuy_top_text'] !!}
                @php
                //    $semena_table =  $options_json['semenabuy_table']);
                // var_dump($options_json['semenabuy_table']);
                @endphp

                <table>
                    <thead>
                        <tr>
                            <th>Наименование культуры, сорт</th>
                            <th>Год урожая</th>
                            <th>Категория семян</th>
                            <th>Регион допуска</th>
                            <th>Количество, тн</th>
                            <th>Цена без обработки, руб/тн</th>
                            <th>Обработка препаратом (Имидор Про (0,75л/т)+ Тебу 60 (0,4 л/т)+ Нагро (0,5 л/т)</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($options_json['semenabuy_table'] as $item)
                                <tr>
                                    <td>{{$item["Наименование культуры, сорт"]}}</td>
                                    <td>{{$item["Год урожая"]}}</td>
                                    <td>{{$item["Категория семян"]}}</td>
                                    <td>{{$item["Регион допуска"]}}</td>
                                    <td>{{$item["Количество, тн"]}}</td>
                                    <td>{{$item["Цена без обработки, руб/тн"]}}</td>
                                    <td>{{$item["Обработка препаратом (Имидор Про (0,75л/т)+ Тебу 60 (0,4 л/т)+ Нагро (0,5 л/т)"]}}</td>
                                </tr>
                            @endforeach

                    </tbody>
                </table>
                {!! $options['semenabuy_bottom_text'] !!}
            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

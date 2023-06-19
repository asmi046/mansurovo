@extends('layouts.all')

@php
    $title = "Семена озмой и яровой пшеницы от производителя";
    $description = "Семена озмой и яровой пшеницы от производителя, выгодные цены, доставка по РФ. Крупный и средний опт.";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Для наших клиентов мы предлагаем лучшую продукцию отвечающую всем стандартам качества'" :img="'img/bg_carier.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">

            <x-breadcrumbs :title="$title"></x-breadcrumbs>

            <div class="description_blk text_styles">
                {!! $options['semenabuy'] !!}
            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

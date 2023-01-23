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
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

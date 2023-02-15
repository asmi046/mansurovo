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
                @foreach ($categories as $cat)
                    <div class="product">
                        <img src="{{$cat->img}}" alt="">
                        <div class="shadow"></div>
                        <div class="text">
                            <h2>{{$cat->title}}</h2>
                            <p>{{$cat->quote}}</p>
                            <div class="btn_wrap">
                                <a href="{{route('products_cat', $cat->slug)}}" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

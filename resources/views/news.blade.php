@extends('layouts.all')

@php
    $title = "Новости компании";
    $description = "Новости компании";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
<x-banner-mini :h1="$title" :subtitle="'Для наших клиентов мы предлагаем лучшую продукцию отвечающую всем стандартам качества'" :img="'img/bg_news.jpg'"></x-banner-mini>

<section class="contacts_text">
    <div class="_container">

        <x-breadcrumbs :title="$title"></x-breadcrumbs>

        <div class="news_years">
            @foreach ($all_yer as $item)
                <a @class(['year_element', 'active' => ($current_yer == $item) ]) href="{{route('news',['current_yer' => $item])}}">{{$item}}</a>
            @endforeach
        </div>


        <div class="news_in_page news-agro__inner">
            @foreach ($news as $item)
                <x-news-element :item="$item"></x-news-element>
            @endforeach

        </div>

    </div>
</section>

<x-connect-main></x-connect-main>

@endsection

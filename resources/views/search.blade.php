@extends('layouts.all')

@php
    $title = "Поиск по запросу: ".$search_query;
    $description = "Поиск по запросу: ".$search_query;
@endphp

@section('title', $title)
@section('description', $description)


@section('content')

<section class="contacts_text">
    <div class="_container">
        <h1 class="inpage_h1">{{$title}}</h1>


        <x-breadcrumbs :title="$title"></x-breadcrumbs>


        <div class="search_wrapper visible">
            <x-search-form></x-search-form>
        </div>

        @if (!$product->isEmpty())
            <h2 class="search_h2">Найдены продукты:</h2>

            <div class="products_in_page">
                @foreach ($product as $item)
                    <x-product-card :item="$item" :category_slug="$item->product_category->slug"></x-product-card>
                @endforeach
            </div>
        @endif

        @if (!$news->isEmpty())
            <h2 class="search_h2">Найдены новости:</h2>

            <div class="news_in_page news-agro__inner">
                @foreach ($news as $item)
                    <x-news-element :item="$item"></x-news-element>
                @endforeach
            </div>
        @endif

        @if (!$vacancy->isEmpty())
            <h2 class="search_h2">Найдены вакансии:</h2>

            <div class="career_wriper">
                @foreach ($vacancy as $item)
                    <x-vacancy-card :item="$item"></x-vacancy-card>
                @endforeach
            </div>
        @endif

    </div>
</section>

<x-connect-main></x-connect-main>

@endsection

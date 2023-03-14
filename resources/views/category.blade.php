@extends('layouts.all')

@php
    $title = $cat_info->seo_title;
    $description = $cat_info->seo_description;
    $banner = (!empty($cat_info->banner))?$cat_info->banner:'img/bg_napr_d.jpg'
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
    <x-banner-mini :h1="$cat_info->title" :subtitle="$cat_info->quote" :img="$banner"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">
            <x-breadcrumbs :product="$cat_info->title"></x-breadcrumbs>

            @if (!$subtype->isEmpty())
                <div class="subtype">
                    <a href="{{route(Route::currentRouteName(), ['slug' => $category_slug])}}" @class(['btn', 'active' => ( $main_subtype === "%" ) ])>Все</a>
                    @foreach ($subtype as $item)
                        <a href="{{route(Route::currentRouteName(), ['subtype' => $item->subtype, 'slug' => $category_slug])}}" @class(['btn', 'active' =>($main_subtype == $item->subtype) ]) >{{$item->subtype}}</a>
                    @endforeach
                </div>
            @endif
            <div class="products_in_page">
                @foreach ($products as $item)
                    <x-product-card :item="$item" :category_slug="$category_slug"></x-product-card>
                @endforeach
            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

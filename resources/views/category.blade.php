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

            <div class="products_in_page">
                @foreach ($products as $item)
                    <div class="product_item">
                        <div class="img_blk">
                            <img src="{{$item->img1}}" alt="">
                        </div>
                        <div class="text_blk">
                            <h2>{{$item->title}}</h2>
                            @if (!empty($item->quote))
                                <p>{{$item->quote}}</p>
                            @else
                                <p>{{mb_strimwidth(strip_tags($item->description), 0, 70, '...')}}</p>
                            @endif

                            <a href="{{route('products_page', [$category_slug, $item->slug])}}" class="btn">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

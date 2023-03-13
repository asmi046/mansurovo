


@extends('layouts.all')

@php
    $title = $product_info->seo_title;
    $description = $product_info->seo_description;
    $banner = (!empty($cat_info->banner))?$cat_info->banner:'img/bg_napr_d.jpg';
    $quote = (empty($product_info->quote))?"Качественная и экологически чистая продукция от отечественного производителя":$product_info->quote;
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
<x-banner-mini :h1="$product_info->title" :subtitle="$quote" :img="$banner"></x-banner-mini>
    <section class="contacts_text">
        <div class="_container">
            <x-breadcrumbs :productpage="$product_info->title" :cattitle="$cat_info->title" :catslug="$cat_info->slug"></x-breadcrumbs>

            <div class="products_page">
                <div class="galery_blk">

                    <div class="swiper product_page_galery">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <img src="{{$product_info->img1}}" alt="{{$product_info->title}} - изображение 1">
                            </div>

                            @if (!empty($product_info->img2))
                                <div class="swiper-slide">
                                    <img src="{{$product_info->img2}}" alt="{{$product_info->title}} - изображение 2">
                                </div>
                            @endif

                            @if (!empty($product_info->img3))
                                <div class="swiper-slide">
                                    <img src="{{$product_info->img3}}" alt="{{$product_info->title}} - изображение 3">
                                </div>
                            @endif

                            @if (!empty($product_info->img4))
                                <div class="swiper-slide">
                                    <img src="{{$product_info->img4}}" alt="{{$product_info->title}} - изображение 4">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>

                <div class="description_blk text_styles">
                    {!! $product_info->description !!}
                </div>
            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection


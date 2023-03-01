@extends('layouts.all')

@php
    $title = (empty($info->seo_title))?$info->title:$info->seo_title;
    $description = (empty($info->seo_description))?$info->title:$info->seo_description;;
@endphp

@section('title', $title)
@section('description', $description)


@section('content')

<section class="contacts_text">
    <div class="_container">


        <x-breadcrumbs :news="$info->title"></x-breadcrumbs>

        <div class="news_prev">
            <div class="left">
                <img src="{{$info->thumb}}" alt="{{$info->title}}">
            </div>

            <div class="right">
                <h1>{{$info->title}}</h1>
                <p class="news_data">{{date("d.m.Y", strtotime($info->news_data))}}</p>
                {!! $info->quote !!}
            </div>
        </div>

        <div class="description_blk text_styles">
            {!! $info->description !!}
        </div>

    </div>
</section>

<x-connect-main></x-connect-main>
@endsection

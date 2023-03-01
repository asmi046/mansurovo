@extends('layouts.all')

@php
    $title = "Агрокомплекс Мансурово";
    $description = "Агрокомплекс Мансурово";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

        <main class="page">
            <x-main-baner></x-main-baner>
            <x-manufactures-slider></x-manufactures-slider>
            <x-principes></x-principes>
            <x-productions></x-productions>
            <x-vacansy-main></x-vacansy-main>
            <x-news-main :news="$news"></x-news-main>
            <x-connect-main></x-connect-main>
        </main>

@endsection

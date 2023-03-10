@extends('layouts.all')

@php
    $title = "Агрокомплекс Мансурово";
    $description = "Агрокомплекс Мансурово";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

        <main class="page">
            <x-main-baner :slides="$slides"></x-main-baner>
            <x-manufactures-slider :works="$works"></x-manufactures-slider>
            <x-principes></x-principes>
            <x-productions></x-productions>
            <x-vacansy-main></x-vacansy-main>
            <x-news-main :news="$news"></x-news-main>
            <x-connect-main></x-connect-main>
        </main>

@endsection

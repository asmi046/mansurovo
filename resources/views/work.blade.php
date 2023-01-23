@extends('layouts.all')

@php
    $title = "Направления деятельности";
    $description = "Направления деятельности";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Ответственный подход к производству и точное планирование залог нашего успеха'" :img="'img/bg_napr_d.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">

            <x-breadcrumbs :title="$title"></x-breadcrumbs>
        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

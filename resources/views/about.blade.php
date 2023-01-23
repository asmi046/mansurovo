@extends('layouts.all')

@php
    $title = "О компании";
    $description = "О компании";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Актуальная информаци о жизни нашей компании и архив новостей'" :img="'img/bg_napr_d.jpg'"></x-banner-mini>

        <section class="contacts_text">
            <div class="_container">
                <x-breadcrumbs :title="$title"></x-breadcrumbs>
            </div>
        </section>

    <x-connect-main></x-connect-main>
@endsection

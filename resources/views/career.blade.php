@extends('layouts.all')

@php
    $title = "Карьера";
    $description = "Карьера";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Мы всегда заинтересованы в привлечении целеустремленных, инициативных, энергичных и творческих людей.'" :img="'img/bg_carier.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">
            <x-breadcrumbs :title="$title"></x-breadcrumbs>

            <div class="career_wriper">
                @foreach ($vacancy as $item)

                    <x-vacancy-card :item="$item"></x-vacancy-card>

                @endforeach


            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>
@endsection

@extends('layouts.all')

@php
    $title = "О компании";
    $description = "О компании";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Актуальная информаци о жизни нашей компании и архив новостей'" :img="'img/bg_napr_d.jpg'"></x-banner-mini>

    <x-connect-main></x-connect-main>
@endsection

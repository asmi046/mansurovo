@extends('layouts.all')

@php
    $title = "Благодарим за обращение";
    $description = "Благодарим за обращение";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')

<section class="contacts_text thencs_section">
    <div class="_container">

        <x-breadcrumbs :title="$title"></x-breadcrumbs>
        <h1>{{$title}}</h1>

        <div class="thancs_icon_box">
            <img src="{{asset("img/icons/msg_acsept.svg")}}" alt="{{$title}}">
            <p>Мы получили Ваше сообщение! Наши специалисты перезвонят Вам в самое ближайшее время!</p>
        </div>

    </div>
</section>

<x-connect-main></x-connect-main>
@endsection

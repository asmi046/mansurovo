@extends('layouts.all')

@php
    $title = "Контакты";
    $description = "Контакты";
@endphp

@section('title', $title)
@section('description', $description)


@section('content')
    <x-banner-mini :h1="$title" :subtitle="'Свяжитесь с нами любым удобным для Вас способом'" :img="'img/bg_contacts.jpg'"></x-banner-mini>

    <section class="contacts_text">
        <div class="_container">

            <x-breadcrumbs :title="$title"></x-breadcrumbs>

            <div class="contacts_in_page_wrapper">
                <h2>АО «Агрокомплекс «Мансурово»</h2>
                <a href="tel:+74712540630" class="phone">+7 (4712) 54-06-30</a>
                <a href="#" class="btn re_call">Заказать звонок</a>
                <a href="mailto:info@mansurovoagro.ru" class="mail">info@mansurovoagro.ru</a>
                <a href="#" class="ca_card">Скачать карточку контрагента</a>
                <h3>Адрес:</h3>
                <p class="adress">306623, Курская область, Советский район,  д. Пожидаевка, д.57.</p>
            </div>

            <div id="render_map">

            </div>
        </div>
    </section>

    <x-connect-main></x-connect-main>
@endsection

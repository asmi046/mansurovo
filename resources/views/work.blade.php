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

            <div class="works_wrapper">

                @foreach ($works as $item)


                    <div class="work_block">
                        <div class="work_text">
                            <h2>{{$item->title}}</h2>
                            <p>{!!$item->quote!!}</p>
                            <a href="{{route('home').'/'.$item->lnk}}" class="btn">Подробнее</a>
                        </div>

                        <a href="{{route('home').'/'.$item->lnk}}" class="work_img">
                            <img src="{{$item->img}}" alt="">
                        </a>
                    </div>
                @endforeach

                {{-- <div class="work_block">
                    <div class="work_text">
                        <h2>Животноводство</h2>
                        <p>Полный цикл производства от выращивания кормовой базы до поставок готовой продукции. Наша компания располагает стадом  3 788  голов крупного рогатого скота фуражных и мясных пород</p>
                        <a href="{{route('givotnovodstvo')}}" class="btn">Подробнее</a>
                    </div>

                    <a href="{{route('givotnovodstvo')}}" class="work_img">
                        <img src="{{asset('img/directions/giv.webp')}}" alt="">
                    </a>
                </div>

                <div class="work_block">
                    <div class="work_text">
                        <h2>Конезавод</h2>
                        <p>«Александровский конный завод №12», старейшее предприятие Курской области. Ведет свою историю с начала XIX века. Предприятие разводит лошадей пород русская рысистая и шетлендский пони.</p>
                        <a href="{{route('konezavod')}}" class="btn">Подробнее</a>
                    </div>

                    <a href="{{route('konezavod')}}" class="work_img">
                        <img src="{{asset('img/directions/hosez.webp')}}" alt="">
                    </a>
                </div> --}}

            </div>

        </div>
    </section>

    <x-connect-main></x-connect-main>

@endsection

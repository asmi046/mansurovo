<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') - Mini India</title>
        <meta name="description" content="@yield('description')">

        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title') />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:url" content="{{route('home')}}" />
        <meta property="og:site_name" content="Магазин индийских товаров - Mini India" />
        <meta property="og:image" content="{{asset('img/og_img.jpg')}}" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta name="twitter:card" content="summary_large_image" />


        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/fav.png')}}" sizes="any">

        <link rel="stylesheet" href="{{asset('js/lib/swiper/swiper-bundle.min.css')}}"/>

        <meta name="_token" content="{{ csrf_token() }}">

        <script src="{{asset('js/lib/swiper/swiper-bundle.min.js')}}"></script>

        @vite([

                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/style.css',
        ])
    </head>

    <body class="site_body" id="global_app">
        <div class="wrapper">
            @yield('content')
        </div>

        @vite([
            'resources/js/sliders.js',
        ])
    </body>
</html>

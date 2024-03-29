<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') - Агрохолдинг Мансурово</title>
        <meta name="description" content="@yield('description')">

        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:url" content="{{route('home')}}" />
        <meta property="og:site_name" content="Агрохолдинг Мансурово" />
        <meta property="og:image" content="{{asset('img/og_img.jpg')}}" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta name="twitter:card" content="summary_large_image" />


        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
        <link rel="icon" type="image/svg" href="{{asset('/img/logo.svg')}}" sizes="any">

        <link rel="stylesheet" href="{{asset('js/lib/swiper/swiper-bundle.min.css')}}"/>

        <meta name="_token" content="{{ csrf_token() }}">

        @if (Route::currentRouteName() == "contacts")
            <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
        @endif

        @vite([

                'resources/css/app.css',
                'resources/js/app.js',

                'public/css/style.css',
                'public/css/components.css',
                'public/css/menu.css',
        ])

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(93306004, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/93306004" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->

    </head>

    <body class="site_body" >
        <x-header></x-header>
        <div class="wrapper" id="global_app">
            @yield('content')
        </div>
        <x-footer></x-footer>

        <script src="{{asset('js/lib/swiper/swiper-bundle.min.js')}}"></script>

        @vite([
            'resources/js/sliders.js',
            'resources/js/map.js',
            'public/js/menu.js',
            'public/js/search.js',
            'public/js/career.js',
        ])
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('theme/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('theme/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{asset('theme/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{asset('theme/plugins/OwlCarousel2-2.2.1/animate.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{asset('theme/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css')}}"> -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
        <script src="{{asset('theme/plugins/easing/easing.js')}}"></script>
        <script src="{{asset('theme/plugins/masonry/masonry.js')}}"></script>
        <script src="{{asset('theme/plugins/masonry/images_loaded.js')}}"></script>
        <script src="{{asset('theme/plugins/parallax-js-master/parallax.min.js')}}"></script>
        <script src="{{asset('theme/js/theme.js')}}"></script>
    </body>
</html>

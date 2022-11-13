<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Wayla">

    @php
        $setting = \App\Models\Setting::find(1);
    @endphp
    @if($setting)
        <link rel="shortcut icon" href="{{ asset('uploads/settings/'.$setting->favicon) }}" type="image/x-icon">
    @endif

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
{{--    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">--}}

{{--    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>

    <div id="app">
        <!-- Page Header-->

        @include('layouts.inc.frontend-navbar')

        @yield('content')

        @include('layouts.inc.frontend-footer')

    </div>


    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
{{--    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>--}}
{{--    <script>--}}
{{--        $('.category-carouse').owlCarousel({--}}
{{--            loop:true,--}}
{{--            margin:10,--}}
{{--            nav:true,--}}
{{--            dots: false,--}}
{{--            responsive:{--}}
{{--                0:{--}}
{{--                    items:2--}}
{{--                },--}}
{{--                600:{--}}
{{--                    items:3--}}
{{--                },--}}
{{--                1000:{--}}
{{--                    items:4--}}
{{--                }--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}

    <!-- Javascript-->
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @yield('scripts')
</body>
</html>

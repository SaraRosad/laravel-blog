<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon.png">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  </head>
<body>
        @include('layouts.inc.user-navbar')

        @yield('content')

        @include('layouts.inc.user-footer')

    <!-- Swiper.js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>
</html>

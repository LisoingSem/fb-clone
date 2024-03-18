<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/facebook.png') }}">

    @yield('meta')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @yield('css')
</head>

<body class="!bg-[#f0f2f5]">

    @include('layouts.header')

    @yield('body')
    {{-- @include('layouts.footer') --}}

    <div id="preloader" class="flex flex-col items-center justify-center h-screen">
        <span class="loading loading-infinity w-20"></span>
    </div>

    @vite(['resources/js/body.js'])
    @yield('scripts')
</body>

</html>

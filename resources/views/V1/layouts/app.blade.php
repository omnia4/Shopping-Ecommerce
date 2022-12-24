<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- include style file -->
    @include('V1.includes.styles')
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>
    @include('V1.includes.loading')

    @include('V1.includes.header')

    @yield('content')

    @include('V1.includes.footer')

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!--End Back To Top Button-->


    <!-- JavaScript files -->
    @include('V1.includes.scripts')
    @yield('scripts')
</body>
</html>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Application')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    {{-- Als je Vite gebruikt --}}
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/js/app.js'])

    {{-- Extra pagina-specifieke CSS --}}
    @stack('styles')
<head>
<body>

    @include('partials.header')

    <main style="background: #fafafa;">
        {{-- @yield('main')          VOLLEDIGE PAGINA --}}
        @yield('header')        {{-- HEADER GEDEELTE --}}
        @yield('content')       {{-- CONTENT GEDEELTE --}}
        {{-- @yield('footer')        FOOTER GEDEELTE --}}
    </main>
    

    @include('partials.footer')
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
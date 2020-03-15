<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/core.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
    <div id="app" class="page en desktop auth">
        <div class="goup hidden-xs" id="goup"><i></i></div>
        @include('parts.header')
        <div class="cover"></div>
        <div class="panel panel-top">
            <div class="panel-box">
            </div>
        </div>
        <div id="toast-container"></div>
        <section id="global-alert">
            <div class="global-alert-main">
                <div class="global-alert-container"></div>
            </div>
        </section>

        <main>
            @yield('content')
        </main>
        @include('parts.footer')
    </div>
</body>
</html>

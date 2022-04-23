<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register_header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="row">
                <div class="col-5 col-md-3 d-flex justify-content-center p-0 left_side">
                    <img src="{{ asset('logo/logo.png') }}" alt="" class="mt-2 logo">
                </div>
                
                <div class="col-3 d-none d-md-block"></div>
                
                <div class="col-3 d-none d-md-block">
                    <p class="h2 mt-1"> ~ welcome ~</p>
                </div>
                
                <!-- スマホ -->
                <div class="col-2 d-md-none d-block"></div>
                
                <div class="col-5 d-md-none d-block">
                    <button class="p-2" id="register_btn" type="submit">
                        <strong class="mx-3">登録する</strong>
                    </button>
                </div>
                
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

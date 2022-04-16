<DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="{{ mix('js/nav_btn.js') }}"></script>
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/nav_btn.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="row d-none d-md-block side_nav_btn" style="margin-top: 100px;"></div>
    </body>
</html>
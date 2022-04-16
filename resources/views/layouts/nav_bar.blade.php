<DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
         <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="{{ mix('js/nav_bar.js') }}"></script>
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/navbar.css') }}" rel="stylesheet">
    </head>
    <body>
     @section('nav_bar')
     <div class="container-fluid p-0 nav_bar d-none" style="margin-top: 100px; width: 30%;">
        <button class="d-flex justify-content-center mt-2 p-0 close_side_nav_btn">×</button>
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item active mt-3">
                        <a class="nav-link d-flex">
                            <img src="{{ asset('nav_ui/no_img.png') }}" alt="" class="nav_profeal_file mx-5">
                            マイページ
                        </a>
                    </li>
                    <li class="nav-item active mt-3" >
                        <a class="nav-link d-flex">
                            <img src="{{ asset('nav_ui/home_btn.png.png') }}" alt="" class="nav_ui_btn mx-5">
                            ホーム画面
                        </a>
                    </li>
                    <li class="nav-item active mt-3">
                        <a class="nav-link d-flex">
                            <img src="{{ asset('nav_ui/pc_side_search.png') }}" alt="" class="nav_ui_btn mx-5">
                            検索
                        </a>
                    </li>
                    <li class="nav-item active mt-3">
                        <a class="nav-link d-flex">
                            <img src="{{ asset('nav_ui/pc_side_keep.png') }}" alt="" class="nav_ui_btn mx-5">
                            マイアクティビティー
                        </a>
                    </li>
                    <li class="nav-item active mt-3">
                        <a class="nav-link d-flex">
                            <img src="{{ asset('nav_ui/my_purchase.png') }}" alt="" class="nav_ui_btn mx-5">
                            購入商品
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
     @endsection
    </body>
</html>
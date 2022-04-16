<DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/review_header.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/review.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="row review_header_content">
                <!-- PC画面 -->
                <div class="col-5 d-none  d-md-block d-flex p-0 left_side">
                    <p class="h3 mx-3 mt-1">
                        <!-- @の読み込み -->
                        <strong>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                              <path
                                d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" />
                            </svg>
                        </strong>
                        <!-- ここまで -->
                        <strong>zonocan</strong>
                    </p>
                </div>
                <div class="col-3 d-none d-md-block "></div>
                <div class="col-3 d-none d-md-block d-flex inline-box p-0">
                    <ul class="navbar p-0 m-0">
                        <li class="nav-item p-0">
                            <a class="nav-link d-flex p-0" href="">
                                <img src="{{ asset('review_header_ui/header_like_btn.png') }}" class="header_ui_btn mt-1 mx-2">
                                アクティビティー
                            </a>
                        </li>
                        <li class="nav-item p-0">
                            <a class="nav-link d-flex p-0" href="">
                                <img src="{{ asset('review_header_ui/header_DM_btn.png') }}" class="header_ui_btn mt-1 mx-2">
                                メール
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- スマホ画面 -->
                <div class="col-2 d-md-none d-block center_side">
                    <a href="" class="header_back_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-left mt-2 mx-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </a>
                </div>
                <div class="col-7 d-md-none d-block d-flex justify-content-center p-0 left_side">
                    <p class="h3 mx-3 mt-1 user_name">
                          <!-- @の読み込み -->
                          <strong>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                              <path
                                d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" />
                            </svg>
                          </strong>
                          <!-- ここまで -->
                          <strong>zonocan</strong>
                    </p>
                </div>
                <div class="d-md-none d-block col-3">
                    @yield('review_header_btn')
                </div>
            </div>
        </header>
        <div class="container-fluid d-flex p-0 main_contents">
            @yield('nav_btn')
            @yield('nav_bar')
            <div class="row main">
                @yield('content')
            </div>
        </div>
        @yield('footer')
    </body>
</html>
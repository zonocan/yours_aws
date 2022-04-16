<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
     <!-- Styles -->
     <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ secure_asset('css/footer.css') }}" rel="stylesheet">
</head>
@section('footer')
    <footer class="footer d-md-none d-block p-1 justify-content-center">
        <div class="row inner m-0">
            <ul class="navbar col-9 d-flex mx-5">
                <li class="nav-item active">
                    <a class="navi-link" href="">
                        <img src="{{ asset('footer_ui/home_btn.png') }}" alt="" class="footer_ui_btn" id="footer_ui_home_btn">
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="navi-link" href="">
                        <img src="{{ asset('footer_ui/search_btn.png') }}" alt="" class="footer_ui_btn" id="footer_ui_search_btn">
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="navi-link" href="">
                        <img src="{{ asset('footer_ui/my_activity.png') }}" alt="" class="footer_ui_btn" id="footer_ui_keep_btn">
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="navi-link" href="">
                        <img src="{{ asset('footer_ui/my_purchase_item.png') }}" alt="" class="footer_ui_btn" id="footer_ui_my_purchase_btn">
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="navi-link" href="">
                        <img src="{{ asset('footer_ui/no_img.png') }}" alt="" class="footer_ui_btn footer_profel" id="profeal_btn">
                    </a>
                </li>
            </ul>
        </div>
    </footer>
@endsection
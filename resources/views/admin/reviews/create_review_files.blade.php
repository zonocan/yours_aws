<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
         <link href="{{ secure_asset('css/review_header_btns.css') }}" rel="stylesheet">
         <link href="{{ secure_asset('css/create_review_files.css') }}" rel="stylesheet">
         <!-- Scripts -->
         <script src="{{ mix('js/create_reviews_files.js') }}"></script>
        <title>投稿画像画面</title>
    </head>
    <body>
        {{-- layouts/review_layout.blade.phpを読み込む --}}
        @extends('layouts.review_layout')
        @section('review_header_btn')
        <div class="col-1 d-md-none d-block justify-content-center" style="margin-left: 40%;">
            <button class="review_file_btn p-2" id="register_btn" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                </svg>
            </button>
        </div>
        @endsection
        @include('layouts.nav_btn')
        @include('layouts.nav_bar')
        @section('content')
        <div class="row content">
            <form method="post" action="" class="" id="register_file_form">
                <label class="review_files">
                    <p class="h4 mx-4 mt-4">投稿画像</p>
                    <img src="{{ asset('review_files_ui/contribute_btn.png') }}" class="file_btn">
                    <input type="file" name="files" id="review_imgs" multiple="multiple">
                </label>
                <ul id="preview" style="display:none"></ul>
                <button class="btn d-none d-md-block contribute mt-4" type="submit">
                    投稿する
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cursor-fill mb-1" viewBox="0 0 16 16">
                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                    </svg>
                </button>
            </form>
        </div>
        @endsection
        @include('layouts.footer')
    </body>
</html>
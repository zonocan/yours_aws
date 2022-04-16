<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
         <link href="{{ secure_asset('css/review_header_btns.css') }}" rel="stylesheet">
        <title>投稿詳細画面</title>
    </head>
    <body>
        {{-- layouts/review_layout.blade.phpを読み込む --}}
        @extends('layouts.review_layout')
        @section('review_header_btn')
        <div class="review_header_content mt-2">
            <button class="review_detail_btn" id="register_btn" type="submit">
                <strong>NEXT</strong>
            </button>
        </div>
        @endsection
        @include('layouts.nav_btn')
        @include('layouts.nav_bar')
        @section('content')
        <div class="row content">
            <form method="post" action="" class="" id="register_info_form">
                <div class="row title">
                    <!-- タイトル-->
                    <label class="form-label">タイトル(商品名)</label>
                    <input type="name" class="form-control" id="name">
                </div>
                <div class="row gender mt-4">
                    <!-- 対象の性別 -->
                    <p class="h6">対象の性別</p>
                    <div class="form-check mx-2">
                        <label class="form-label">UNISEX</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">MENS</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">WOMENS</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                </div>
                <div class="row category mt-4">
                    <!-- カテゴリー -->
                    <p class="h6">カテゴリー</p>
                    <div class="form-check mx-2">
                        <label class="form-label">TOPS</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">BOTTOMS</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">SHOES</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">ACCESARY</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                </div>
                <div class="row size mt-4">
                    <!-- 体のサイズ -->
                    <p class="h6">体のサイズ</p>
                    <div class="form-check mx-2">
                        <label class="form-label">S</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">M</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">L</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">other</label>
                        <input type="other_size" class="form-control" id="size">
                    </div>
                </div>
                <div class="row foot_size mt-4">
                    <!-- 体のサイズ -->
                    <p class="h6">足のサイズ</p>
                    <div class="form-check mx-2">
                        <label class="form-label">20cm~24cm</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">24cm~27cm</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">27cm~30cm</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">other</label>
                        <input type="other_size" class="form-control" id="foot_size">
                    </div>
                </div>
                <div class="row purchase_function mt-4">
                    <!-- 販売機能の有無 -->
                    <p class="h6">販売機能をつけますか?</p>
                    <div class="form-check mx-2">
                        <label class="form-label">1 はい</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="form-check mx-2">
                        <label class="form-label">2 いいえ</label>
                        <input class="form-check-input" type="checkbox">
                    </div>
                </div>
                <div class="row price mt-4">
                    <!-- 販売価格 -->
                    <label class="form-label">¥価格</label>
                    <input type="price" class="form-control" id="price">
                </div>
                <div class="row stock mt-4">
                    <!-- 販売価格 -->
                    <label class="form-label">＃在庫数</label>
                    <input type="stock" class="form-control" id="stock">
                </div>
                <div class="row stock mt-4">
                    <!-- 商品詳細 -->
                    <label class="form-label">投稿コメント</label>
                    <textarea class="form-control" id="text"></textarea>
                </div>
                <button class="btn d-none d-md-block contribute mt-4" type="submit">次の画面</button>
            </form>
        </div>
        @endsection
        @include('layouts.footer')
    </body>
</html>
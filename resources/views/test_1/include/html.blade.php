<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>@yield('html_head_title')</title>
@section('html_head_css')
@show
@section('html_head_javascript')
@show
    </head>
    <body>
@section('body_header')
        @include('test_1.include.header')
@show

@section('body_content')
		主要內容
@show

@section('body_footer')
        @include('test_1.include.footer')
@show
    </body>
</html>
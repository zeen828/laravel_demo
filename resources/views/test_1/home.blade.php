@extends('test_1.include.html')
@section('title', 'Demo')
@section('html_head_css')
        <link rel="stylesheet" href="/test_1/css/common.css">
        <link rel="stylesheet" href="/test_1/css/shoptop.css">
@endsection
@section('body_header')
        <header>
            <h1><span>Demo</span></h1>
            <div class="headerLogo">
                <a href="/test_1/index"><img src="/test_1/img/logo.png" alt="LOGO"></a>
            </div>
        </header>
@endsection
@section('body_content')
		<div class="f-mainContents u-container">
			<div class="shopTitle">
				<a href="/test_1/search">search</a>
			</div>
			<div class="shopTitle">
				<a href="/test_1/ranking">ranking</a>
			</div>
			<div class="shopTitle">
				<a href="/test_1/shoptop/1">shoptop/1</a>
			</div>
			<div class="shopTitle">
				<a href="/test_1/shopcomment">shopcomment</a>
			</div>
		</div>
@endsection
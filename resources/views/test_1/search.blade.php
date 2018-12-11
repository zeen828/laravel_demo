@extends('test_1.include.html')
@section('html_head_title', '美食查詢')
@section('html_head_css')
        <link rel="stylesheet" href="/test_1/css/common.css">
        <link rel="stylesheet" href="/test_1/css/search.css?<?php echo time();?>">
@endsection
@section('html_head_javascript')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script>
        $( document ).ready(function() {
			//area
        	$(".rightWrap .area_mains").off().on("click", function() {
            	$(".rightWrap .area_mains").removeClass("is-active");
            	$(this).addClass("is-active");
			});
			//food
        	$(".rightWrap .food_mains").off().on("click", function() {
            	$(".rightWrap .food_mains").removeClass("is-active");
            	$(this).addClass("is-active");
			});
		});
        </script>
@endsection
@section('header_tag', '美食查詢')
@section('body_content')
        <div class="f-breadCrumbs u-container">
            <ul>
                <li><a href="">首頁</a></li>
                <li>></li>
                <li><a href="">台北市</a></li>
                <li>></li>
                <li><span>查詢結果</span></li>
            </ul>
        </div>
        <div class="f-mainContents u-container">
            <div class="mainWrap">
                <h2>台北市/信義區/日式料理/居酒屋 查詢結果</h2>
                <div class="m-pager">
                    <ul>
                        <li><span>1</span></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">＞</a></li>
                    </ul>
                </div>
                <div class="m-shopList">
                    <ul>
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">TEST1日式小小居酒屋</a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    <img src="/test_1/img/shop/18.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>好吃！好喝！好便宜！來TEST1日式小小居酒屋吧！</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            <td>日式料理</td>
                                        </tr>
                                        <tr>
                                            <th>標籤</th>
                                            <td>
                                                <ul class="foodTags">
                                                    <li>居酒屋</li>
                                                    <li>綜合日式料理</li>
                                                    <li>生魚片、壽司</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>營業時間</th>
                                            <td>17:00 ～ 4:00</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                                        </tr>
                                    </table>
                                    <div class="linkBtn">
                                        <button class="like u-hoverOpacity">LIKE</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">TEST2日式小小居酒屋</a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    <img src="/test_1/img/shop/15.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>好吃！好喝！好便宜！來TEST2日式小小居酒屋吧！</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            <td>日式料理</td>
                                        </tr>
                                        <tr>
                                            <th>標籤</th>
                                            <td>
                                                <ul class="foodTags">
                                                    <li>居酒屋</li>
                                                    <li>生魚片、壽司</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>營業時間</th>
                                            <td>24小時</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                                        </tr>
                                    </table>
                                    <div class="linkBtn">
                                        <button class="like is-active u-hoverOpacity">LIKE</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">TEST3日式小小居酒屋</a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    <img src="/test_1/img/shop/14.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>好吃！好喝！好便宜！來TEST3日式小小居酒屋吧！</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            <td>日式料理</td>
                                        </tr>
                                        <tr>
                                            <th>標籤</th>
                                            <td>
                                                <ul class="foodTags">
                                                    <li>居酒屋</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>營業時間</th>
                                            <td>每天到三點，每週日休</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                                        </tr>
                                    </table>
                                    <div class="linkBtn">
                                        <button class="like u-hoverOpacity">LIKE</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="m-pager">
                    <ul>
                        <li><span>1</span></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">＞</a></li>
                    </ul>
                </div>
            </div>
@include('test_1.body_right.search')
        </div>
@endsection
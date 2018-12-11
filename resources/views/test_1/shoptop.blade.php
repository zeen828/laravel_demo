@extends('test_1.include.html')
@section('html_head_title', $content['store']->shop_name . '-' . $content['store']->area_mains->area_name)
@section('html_head_css')
        <link rel="stylesheet" href="/test_1/css/common.css">
        <link rel="stylesheet" href="/test_1/css/shoptop.css">
        <style>
        </style>
@endsection
@section('html_head_javascript')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
        <script>
        $( document ).ready(function() {
            //like
        	var is_like = $.cookie("is_like_{{ $content['store']->id }}");
        	console.log("ooxx" + is_like);
        	if(is_like == undefined){
            	console.log("沒like");
            	$(".linkBtn .like").removeClass("is-active");
            }else{
            	console.log("有like");
            	$(".linkBtn .like").removeClass("is-active").addClass("is-active");
            }
			//like button
        	$(".linkBtn button.like").off().on("click", function() {
        		console.log("like");
        		$.cookie("is_like_{{ $content['store']->id }}", "like", { expires: 365 });
        		$(".linkBtn .like").removeClass("is-active").addClass("is-active");
			});
			//shop
			var phos_count_max = $(".shopContents li").length;
			var phos_count = 0;
        	$('.photo_image li').hide();
        	$('.photo_image li').eq(phos_count).show();

        	$('.pagination span').removeClass("active");
        	$('.pagination span').eq(phos_count).addClass("active");
		
			//shop button
        	$(".shopContents .button-prev").off().on("click", function() {
            	console.log("button-prev");
            	phos_count = phos_count - 1;
            	if(phos_count <= 0){
            		phos_count = 0;
                }
            	$('.photo_image li').hide();
            	$('.photo_image li').eq(phos_count).show();

            	$('.pagination span').removeClass("active");
            	$('.pagination span').eq(phos_count).addClass("active");
            	console.log(phos_count);
			});
        	$(".shopContents .button-next").off().on("click", function() {
            	console.log("button-next");
            	phos_count = phos_count + 1;
            	if(phos_count >= phos_count_max){
            		phos_count = phos_count_max - 1;
                }
            	$('.photo_image li').hide();
            	$('.photo_image li').eq(phos_count).show();

            	$('.pagination span').removeClass("active");
            	$('.pagination span').eq(phos_count).addClass("active");
            	
            	console.log(phos_count);

			});
		});
        </script>
@endsection
@section('header_tag', $content['store']->shop_name . '/' . $content['store']->area_mains->area_name . '/' . $content['store']->area_subs->area_name)
@section('body_content')
        <div class="f-breadCrumbs u-container">
            <ul>
                <li><a href="">首頁</a></li>
                <li>></li>
                <li><a href="">{{ $content['store']->area_mains->area_name }}</a></li>
                <li>></li>
                <li><a href="">{{ $content['store']->area_subs->area_name }}</a></li>
                <li>></li>
                <li><span>{{ $content['store']->shop_name }}</span></li>
            </ul>
        </div>
        <div class="f-mainContents u-container">
            <h2>
                {{ $content['store']->shop_name }}
            </h2>
            <div class="linkBtn">
                <button class="like like_{{ $content['store']->id }}u-hoverOpacity">LIKE</button>
                <a href="/test_1/shopcomment/{{ $content['store']->id }}" id="share" class="comment" value="你好.要copy的內容!">分享文</a>
            </div>
            <p class="shopTitle">
                {{ $content['store']->main_title }}
            </p>
            <div class="introduction">
                {{ $content['store']->shop_text }}
            </div>
            <div class="shopContents">
                <h3><span class="photo">PHOTO GALLERY</span></h3>
                <div class="photoSlider slide_con">
                    <ul class="photo_image slide">
                    	<li><img src="/test_1/img/shop/{{ $content['store']->shop_photos['0']->photo_num }}.png" alt=""></li>
                    	<li><img src="/test_1/img/shop/{{ $content['store']->shop_photos['0']->photo_num + 1 }}.png" alt=""></li>
                        <li><img src="/test_1/img/shop/{{ $content['store']->shop_photos['0']->photo_num + 2 }}.png" alt=""></li>
                        <li><img src="/test_1/img/shop/{{ $content['store']->shop_photos['0']->photo_num + 3 }}.png" alt=""></li>
                    </ul>
                    <div class="pagination">
                        <span class="active"></span>
                        <span class=""></span>
                        <span class=""></span>
                        <span class=""></span>
                    </div>
                    <div class="button-next"></div>
                    <div class="button-prev"></div>
                </div>
            </div>
            <div class="shopContents">
                <h3><span class="access">ACCESS</span></h3>
                <div class="accessmap">
                <?php $l = $content['store']->lat_long; ?>
                    <iframe frameborder="0" scrolling="no" style="width:100%;height:380px; border-right:0px;" src="//maps.google.com.tw/maps?f=q&amp;hl=zh-TW&amp;q=<?php echo $l;?>&amp;z=17&amp;output=embed"></iframe>
                </div>
            </div>
            <div class="shopContents">
                <h3><span class="imformation">IMFORMATION</span></h3>
                <div class="shopInfo">
                    <table>
                        <tr>
                            <th>商家名稱</th>
                            <td>{{ $content['store']->shop_name }}</td>
                        </tr>
                        <tr>
                            <th>商家分類</th>
                            <td>日式料理</td>
                        </tr>
                        <tr>
                            <th>標籤</th>
                            <td>居酒屋 / 綜合日式料理 / 生魚片、壽司</td>
                        </tr>
                        <tr>
                            <th>電話</th>
                            <td>{{ $content['store']->tel }}</td>
                        </tr>
                        <tr>
                            <th>地址</th>
                            <td>{{ $content['store']->address }}</td>
                        </tr>
                        <tr>
                            <th>捷運資訊</th>
                            <td>{{ $content['store']->station }}</td>
                        </tr>
                        <tr>
                            <th>公休日</th>
                            <td>{{ $content['store']->holiday }}</td>
                        </tr>
                        <tr>
                            <th>營業時間</th>
                            <td>{{ $content['store']->open_time }}</td>
                        </tr>
                        <tr>
                            <th>營業資訊</th>
                            <td>{{ $content['store']->shop_info }}</td>
                        </tr>
                        <tr>
                            <th>更新時間</th>
                            <td>{{ $content['store']->updated_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
@endsection
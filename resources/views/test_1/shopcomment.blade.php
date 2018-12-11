@extends('test_1.include.html')
@section('html_head_title', 'title')
@section('html_head_css')
        <link rel="stylesheet" href="/test_1/css/common.css">
        <link rel="stylesheet" href="/test_1/css/shopcomment.css">
@endsection
@section('html_head_javascript')
@endsection
@section('header_tag', 'header_tag')
@section('body_content')
        <div class="f-breadCrumbs u-container">
            <ul>
                <li><a href="">首頁</a></li>
                <li>></li>
                <li><a href="">台北市</a></li>
                <li>></li>
                <li><a href="">台北市・信義區</a></li>
                <li>></li>
                <li><a href="">TEST1日式小小居酒屋-台北市-</a></li>
                <li>></li>
                <li><span>分享文</span></li>
            </ul>
        </div>
        <div class="f-mainContents u-container">
            <h2>
                TEST1日式小小居酒屋
            </h2>
            <div class="linkBtn">
                <a href="" class="back">回店家首頁</a>
            </div>
            <div class="shopContents">
                <h3><span class="comment">COMMENT</span></h3>
                <div class="commentList">
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
                    <ul>
                        <li class="c-list">
                            <div class="mainHead">
                                <p class="title">還可以啦~</p>
                                <p class="name">王小明</p>
                                <p class="date">2018/03/11 12:33</p>
                            </div>
                            <div class="mainDetail">
                                <p class="mark">評分：<span>85</span>分</p>
                                <div class="body">
                                    下班後一定很多人想要吃點小品搭配著酒，然後可以好好的聊著天舒壓一下<br>
                                    【TEST1日式小小居酒屋】位在台北世貿站附近，充滿日式風和好吃的餐點，很適合和朋友、同事來喝一杯
                                </div>
                            </div>
                            <div class="replyList">
                                <p class="replyTitle">回應</p>
                                <ul>
                                    <li class="r-list">
                                        <div class="r-detail">
                                            <p class="r-name">王大明</p>
                                            <p class="r-date">2018/03/12 12:33</p>
                                            <div class="r-body">
                                                我也想去
                                            </div>
                                        </div>
                                    </li>
                                    <li class="r-list">
                                        <div class="r-detail">
                                            <p class="r-name">王中明</p>
                                            <p class="r-date">2018/03/12 11:33</p>
                                            <div class="r-body">
                                                我也想去
                                            </div>
                                        </div>
                                    </li>
                                    <p class="more">顯示全部</p>
                                </ul>
                            </div>
                            <div class="replyForm">
                                <p class="replyFormTitle">回應投稿</p>
                                <table>
                                    <tr>
                                        <th>NAME</th>
                                        <td><input type="text" placeholder="請寫您的名字"></td>
                                    </tr>
                                    <tr>
                                        <th>COMMENT</th>
                                        <td><textarea name="" id="" cols="30" rows="10" placeholder="請寫回應"></textarea></td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                        <li class="c-list">
                            <div class="mainHead">
                                <p class="title">不錯啦~</p>
                                <p class="name">楊小明</p>
                                <p class="date">2018/03/01 10:33</p>
                            </div>
                            <div class="mainDetail">
                                <p class="mark">評分：<span>94</span>分</p>
                                <div class="body">
                                    TEST1日式小小居酒屋位在台北世貿站附近 步行約九分鐘的距離<br>
                                    環境裝潢擺飾  有著濃厚日式風格<br>
                                    舒適愜意的空間   很適合三五好友聚餐
                                </div>
                            </div>
                            <div class="replyList">
                                <p class="replyTitle">回應</p>
                                <ul>
                                    <li class="r-list">
                                        <div class="r-detail">
                                            <p class="r-name">楊大明</p>
                                            <p class="r-date">2018/03/13 12:33</p>
                                            <div class="r-body">
                                                好想吃啊哈哈！
                                            </div>
                                        </div>
                                    </li>
                                    <li class="r-list">
                                        <div class="r-detail">
                                            <p class="r-name">楊中明</p>
                                            <p class="r-date">2018/03/02 12:33</p>
                                            <div class="r-body">
                                                推推推，超讚的分享~
                                            </div>
                                        </div>
                                    </li>
                                    <p class="more">顯示全部</p>
                                </ul>
                            </div>
                            <div class="replyForm">
                                <p class="replyFormTitle">回應投稿</p>
                                <table>
                                    <tr>
                                        <th>NAME</th>
                                        <td><input type="text" placeholder="請寫您的名字"></td>
                                    </tr>
                                    <tr>
                                        <th>COMMENT</th>
                                        <td><textarea name="" id="" cols="30" rows="10" placeholder="請寫回應"></textarea></td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                    </ul>
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
                <div class="commentFrom">
                    <p class="form-title">投稿</p>
                    <table>
                        <tr><th>NAME</th></tr>
                        <tr><td><input type="text" class="full" placeholder="請寫您的名字"></td></tr>
                        <tr><th>SCORE</th></tr>
                        <tr><td><input type="text" placeholder="請寫評分"><span>分</span></td></tr>
                        <tr><th>TITLE</th></tr>
                        <tr><td><input type="text" class="full" placeholder="請寫標題"></td></tr>
                        <tr><th>COMMENT</th></tr>
                        <tr><td><textarea name="" id="" cols="30" rows="30" placeholder="請寫分享文"></textarea></td></tr>
                        <tr><td><button class="u-hoverOpacity">投稿</button></td></tr>
                    </table>
                </div>
            </div>
        </div>
@endsection
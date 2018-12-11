            <div class="rightWrap">
                <div class="r-searchMenu">
                    <p class="searchTitle"><span>查詢</span></p>
                    <div class="searchArea">
                        <p class="typeTitle">地點</p>
                        <ul class="main">
@foreach ($body['area'] as $area_mains)
                            <li class="m-list area_mains">
                                <p class="mainList"><span>{{ $area_mains->area_name }}</span></p>
                                <ul class="sub">
                                    <li>
                                        <input type="checkbox" name="area_mains">
                                        <label for="s-area0">全{{ $area_mains->area_name }}</label>
                                    </li>
@foreach ($area_mains->area_subs as $area_subs)
                                    <li>
                                        <input type="checkbox" name="area_subs">
                                        <label for="s-area0">{{ $area_subs->area_name }}</label>
                                    </li>
@endforeach
                                </ul>
                            </li>
@endforeach
                    </div>
                    <div class="searchFood">
                        <p class="typeTitle">分類</p>
                        <ul class="main">
@foreach ($body['food'] as $food_mains)
                            <li class="m-list food_mains">
                                <p class="mainList"><span>{{ $food_mains->food_name }}</span></p>
                                <ul class="sub">
                                    <li>
                                        <input type="checkbox" name="food_mains">
                                        <label for="s-genre0">全{{ $food_mains->food_name }}</label>
                                    </li>
@foreach ($food_mains->food_subs as $food_subs)
                                    <li>
                                        <input type="checkbox" name="food_subs">
                                        <label for="s-genre1">{{ $food_subs->food_name }}</label>
                                    </li>
@endforeach
                                </ul>
                            </li>
@endforeach
                        </ul>
                    </div>
                    <div class="btnArea">
                        <button class="searchBtn">查詢</button>
                        <button class="rankingBtn">排行榜</button>
                    </div>
                </div>
            </div>
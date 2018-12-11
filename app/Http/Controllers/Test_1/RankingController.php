<?php

namespace App\Http\Controllers\Test_1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\test_1\Shop_mains;

class RankingController extends Controller
{
    public function index(){
        //get area all
        //$area = Area_mains::all();
        //print_r($area);
        //$food = Food_mains::all();
        //print_r($food);
        
        $data_view = array(
            'title'=>'美食查詢網頁',
            'header'=>array(),
            'body'=>array(
                'tmp'=>'tmp',
                //'area'=>$area,
                //'food'=>$food,
            ),
            'footer'=>array(),
        );
        return view('test_1.ranking', $data_view);
    }
    
    public function store($id=null){
        
        $store = Shop_mains::find($id);
        
        if(empty($store)){
            abort(404);
        }
        //print_r($store);
        //print_r($store->area_mains);
        //print_r($store->area_subs);
        //print_r($store->food_mains);
        //print_r($store->shop_photos);
        $data_view = array(
            'css'=>array('common.css', 'shoptop.css'),
            'javascript'=>array(),
            'title'=>'店舖網頁',
            'header'=>array(),
            'content'=>array(
                'store'=>$store,
            ),
            'footer'=>array(),
        );
        return view('test_1.shoptop', $data_view);
    }
}

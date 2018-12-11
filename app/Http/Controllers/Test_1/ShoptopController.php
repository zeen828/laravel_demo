<?php

namespace App\Http\Controllers\Test_1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\test_1\Shop_mains;

class ShoptopController extends Controller
{
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

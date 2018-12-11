<?php

namespace App\Model\test_1;

use Illuminate\Database\Eloquent\Model;

//php artisan make:model Model/test_1/Shop_mains
class Shop_mains extends Model
{
    //
    public function area_mains()
    {
        return $this->hasOne('App\Model\test_1\Area_mains', 'id', 'main_area');
    }
    
    public function area_subs()
    {
        return $this->hasOne('App\Model\test_1\Area_subs', 'id', 'sub_area');
    }
    
    public function food_mains()
    {
        return $this->hasOne('App\Model\test_1\Food_mains', 'id', 'main_food');
    }
    
    public function shop_photos()
    {
        return $this->hasMany('App\Model\test_1\Shop_photos', 'shop_table_id', 'id');
    }
}

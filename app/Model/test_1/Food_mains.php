<?php

namespace App\Model\test_1;

use Illuminate\Database\Eloquent\Model;

//php artisan make:model Model/test_1/Food_mains
class Food_mains extends Model
{
    //
    public function food_subs()
    {
        return $this->hasMany('App\Model\test_1\Food_subs', 'master_id', 'id');
    }
}

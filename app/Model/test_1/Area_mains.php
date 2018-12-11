<?php

namespace App\Model\test_1;

use Illuminate\Database\Eloquent\Model;

//php artisan make:model Model/test_1/Area_mains
class Area_mains extends Model
{
    //
    public function area_subs()
    {
        return $this->hasMany('App\Model\test_1\Area_subs', 'master_id', 'id');
    }
}

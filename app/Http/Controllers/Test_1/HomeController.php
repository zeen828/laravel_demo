<?php

namespace App\Http\Controllers\Test_1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\test_1\Shop_mains;

class HomeController extends Controller
{
    public function index(){
        return view('test_1.home');
    }
}

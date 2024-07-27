<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\VoidType;

class customerController extends Controller
{
    public function index(){
        return view('users.customer.homepage');
    }

    public function buy($pid){
        return view('users.customer.buy', ['pid' => $pid]);
    }

    public function viewProduct($pid){
        return view('users.customer.viewProduct', ['pid'=> $pid]);
    }

    public function category($cat){
        return view('users.customer.category', ['cat'=> $cat]);
    }

    public function personsDashboard($uid){
        return view('users.customer.dashboard', ['uid' => $uid]);
    }
}

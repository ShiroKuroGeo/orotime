<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guestController extends Controller
{
    public function buy($pid){
        return view('users.guest.buy', ['pid' => $pid]);
    }

    public function viewProduct($pid){
        return view('users.guest.viewProduct', ['pid'=> $pid]);
    }

    public function category($cat){
        return view('users.guest.category', ['cat'=> $cat]);
    }

    public function exploreMore(){
        return view('users.guest.explore');
    }

}

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

    public function personsWishlist(){
        return view('users.customer.wish');
    }

    public function personsOrder(){
        return view('users.customer.order');
    }

    public function personsReviews(){
        return view('users.customer.reviews');
    }

    public function personsInformation(){
        return view('users.customer.personInfo');
    }
}

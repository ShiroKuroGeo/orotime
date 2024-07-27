<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class referralController extends Controller
{
    public function index(){
        return view("users.referral.dashboard");
    }

    public function ProductReferral(){
        return view("users.referral.product");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class referralController extends Controller
{
    public function index()
    {
        return view("users.referral.dashboard");
    }

    public function ProductReferral()
    {
        return view("users.referral.product");
    }

    public function referredProduct($refId, $proId)
    {
        return view("users.referral.referredProduct", compact(['refId', 'proId']));
    }

    public function redirectToUrl($url){
        return redirect($url);
    }
}

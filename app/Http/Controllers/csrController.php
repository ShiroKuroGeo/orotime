<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryBatchCommand;

class csrController extends Controller
{
    public function index(){
        return view('users.csr.dashboard');
    } 

    public function view($pid){
        return view('users.csr.product.details',['pid' => $pid]);
    }

    public function list(){
        return view('users.csr.product.products');
    }

    public function addView(){
        return view('users.csr.product.add');
    }

    public function categoryView(){
        return view('users.csr.product.category');
    }

    public function orders($oid){
        return view('users.csr.order.list', ['oid' => $oid]);
    }

    public function customerMail(){
        return view('user.csr.concern');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function list($cat){
        return view("admin.product.products", ['cat' => $cat]);
    }

    public function add(){
        return view('admin.product.add');
    }

    public function category(){
        return view('admin.product.category');
    }

    public function details($pid){
        return view('admin.product.details', ['pid' => $pid]);
    }
    
    public function userList(){
        return view('admin.user.list');
    }

    public function userType($type){
        return view('admin/user/type', ['type'=> $type]);
    }

    public function userTypeUid($type, $uid){
        return view('admin.user.details', ['type' => $type, 'uid'=> $uid]);
    }

    public function orderList(){
        return view('admin.order.list');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function invoicingOrder($oid){
        return view('admin.order.invoice', ['oid' => $oid]);
    }


}

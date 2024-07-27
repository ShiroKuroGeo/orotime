<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\csrController;
use App\Http\Controllers\referralController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\guestController;

Route::get('/', function () {
    return view('welcome');
})->name('back');

Route::prefix('auth')->group(function () {
    Route::get('/login', [Controller::class, 'login'] )->name('login');
    Route::get('/registration', [Controller::class, 'register'] )->name('register');
    Route::get('/forgot-password', [Controller::class, 'forgotPassword'] )->name('forgotPassword');
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
});

Route::prefix('guest/')->group(function () {
    Route::get('order/product/{pid}', [guestController::class, 'buy'] )->name('guestPurchaser');
    Route::get('product/view/{pid}', [guestController::class, 'viewProduct'] )->name('viewProduct');
    Route::get('product/category/{cat}', [guestController::class, 'category'] )->name('CategoryProduct');
});

Route::prefix('admin/orotime/')->group(function () {
    Route::get('dashboard', [adminController::class, 'dashboard'])->name('admin');
    Route::get('product/list/{cate}', [adminController::class, 'list'])->name('product-list');
    Route::get('product/add', [adminController::class, 'add'])->name('product-add');
    Route::get('product/category', [adminController::class, 'category'])->name('product-category');
    Route::get('product/details/{pid}', [adminController::class, 'details'])->name('product-details');
    Route::get('users/list', [adminController::class, 'userList'])->name('user-list');
    Route::get('users/type/{type}', [adminController::class, 'userType'])->name('user-type');
    Route::get('users/details/{type}/{uid}', [adminController::class, 'userTypeUid'])->name('user-details');
    Route::get('order/', [adminController::class, 'orderList'])->name('order-list');
});

Route::prefix('csr/')->group(function () {
    Route::get('dashboard', [csrController::class, 'index'])->name('csr-dashboard');
    Route::get('products', [csrController::class, 'list'])->name('product-list');
    Route::get('category', [csrController::class, 'categoryView'])->name('csr-category');
    Route::get('products/add', [csrController::class, 'addView'])->name('product-csr-add');
    Route::get('details/{pid}', [csrController::class, 'view'])->name('product-csr-details');
    Route::get('order/{oid}', [csrController::class, 'orders'])->name('csr-order');
});

Route::prefix('referral')->group(function () {
    Route::get('dashboard', [referralController::class, 'index'])->name('ref-dashboard');
    Route::get('product/referral', [referralController::class, 'ProductReferral'])->name('ref-product');
});

Route::prefix('customer/')->group(function (){
    Route::get('home', [customerController::class, 'index'])->name('homepage');
    Route::get('order/product/{pid}', [customerController::class, 'buy'] )->name('getPurchase');
    Route::get('product/view/{pid}', [customerController::class, 'viewProduct'] )->name('getViewProduct');
    Route::get('product/category/{cat}', [customerController::class, 'category'] )->name('getCategory');
    Route::get('dashboard/{uid}', [customerController::class,'personsDashboard'])->name('cus-dashboard');
});
<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    public function index(){ return view('shop.index'); }
    public function product($id){ return view('shop.product', compact('id')); }
    public function cart(){ return view('shop.cart'); }
}

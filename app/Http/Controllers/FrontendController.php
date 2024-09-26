<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [

        ];

        return view('frontend.index', $data);
    }

    public function shop() {

        return view('frontend.shop');
    }

    public function about() {

        return view('frontend.about');
    }

    public function contact() {

        return view('frontend.contact');
    }

    public function cart() {

        return view('frontend.cart');
    }

    public function checkout() {

        return view('frontend.checkout');
    }

    public function wishlist() {

        return view('frontend.wishlist');
    }

    public function single_product($id) {

        return view('frontend.single-product');
    }
}

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

    public function single_product($id) {

        return view('frontend.single-product');
    }
}

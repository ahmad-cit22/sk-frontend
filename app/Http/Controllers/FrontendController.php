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

    public function categories() {

        return view('frontend.categories');
    }

    public function products() {

        return view('frontend.products');
    }
}

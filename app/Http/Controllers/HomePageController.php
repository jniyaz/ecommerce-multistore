<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::take(8)->get();
        return view('front.pages.home')->with(['products' => $products]);
    }
}

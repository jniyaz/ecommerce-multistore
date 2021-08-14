<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::take(8)->get();
        $categories = Category::whereNull('parent_id')->get();
        return view('front.pages.home')->with(compact('products', 'categories'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('cid');
        $categoryName = null;
        if($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);
            $products = $category->allProducts()->unique('name');
        } else {
            $products = Product::take(20)->get();
        }
        return view('front.pages.products.index', compact('categoryName', 'products'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $products = Product::where('name', 'LIKE', "%{$query}%")->paginate(9);
        return view('front.pages.products.catalogue', compact('products'));
    }
}

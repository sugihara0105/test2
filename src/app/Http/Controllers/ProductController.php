<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;

class ProductController extends Controller
{
    public function products(){
        $products = Product::Paginate(6);
        return view('products', compact('products'));
    }
    public function register(){
        return view('register');
    }
    public function products2(Request $request){
        Product::create($request->only(['name','price','image','discription']));
        Season::create($request->only(['name']));
        return view('products');
    }
}

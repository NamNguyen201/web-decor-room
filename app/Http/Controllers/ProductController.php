<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
    public function index(){
        $products = Product::get();
        return view('list_product',['products'=>$products]);
    }
}

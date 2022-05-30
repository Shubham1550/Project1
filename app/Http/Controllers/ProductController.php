<?php

namespace App\Http\Controllers;

use App\models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store (Request $request){
        $product = new Product();
        $product -> email = $request-> email;
        $product -> password = $request-> password;

        $product-> save();

    }

    public function index(){
        $product = Product::all();
        return view('table',compact('product'));
    }
}

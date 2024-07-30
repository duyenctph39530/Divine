<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products= Product::orderByDesc('id')->paginate(4);
        $views=Product::orderByDesc('view')->paginate(4);
        $study1=Product::where('category_id','=','1')->paginate(4);
        $study2=Product::where('category_id','=','2')->paginate(4);
        $study3=Product::where('category_id','=','3')->paginate(4);
        return view('client.index',compact('products','views','study1','study2',
        'study3'));
        
    }
    public function list()
    {
        $products = Product::all();
        return view('client.product',compact('products'));
    }
    public function studyProduct()
    {
        $products = Product::where('category_id','=','1')->get();
        return view('client.study',compact('products'));
    }
    public function workProduct()
    {
        $products = Product::where('category_id','=','2')->get();
        return view('client.work',compact('products'));
    }
    public function entertaimentProduct()
    {
        $products = Product::where('category_id','=','3')->get();
        return view(' client.entertaiment',compact('products'));
    }public function detailProduct($id)
    {
        $products=Product::findOrFail($id);
        $product=Product::where('category_id',$products->category_id)
        ->where('id','<>',$products->id)
        ->limit(4)->get();
        return view('client.detail',compact('products','product'));
        
    }
   
    public function cartProduct()
    {
        $products=Product::first();
        
        return view('client.cart',compact('products'));
        
    }

}

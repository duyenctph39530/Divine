<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
      $totalProduct= Product::count();
      $totalCategory= Category::count();
      $totalView= Product::sum('view');
      $productsByCategory = Product::count('category_id');
    return view('admin.dashboard',compact('totalProduct','totalCategory','totalView','productsByCategory'));
   }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(10);
        return view('admin.product.list_product', compact('products'));
    }
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create_product', compact('category'));
    }
    public function store(Request $request)
    {
        $data= $request->except('image');
        $data['image']=' ';
        if($request->hasFile('image')){
            $path_image=$request->file('image')->store('images');
            $data['image']= $path_image;
        }
        Product::create($data);
        return redirect()->route('list-product')->with('mes','Thêm sản phẩm thành công!');
    }
    public function edit(Product $product)
    {
        $category=Category::all();
        return view('admin.product.edit_product', compact('category','product'));

    }
    public function update(Request $request , Product $product )
    {
        $data= $request->except('image');
        $old_img=$product->image;
        $data['image']=$old_img;
        if($request->hasFile('image')){
            $path_image=$request->file('image')->store('images');
            $data['image']=$path_image;

        }
        $product->update($data);
        if(isset($path_image)){
            if(file_exists('storage/'.$old_img)){
                unlink('storage/'.$old_img);
            }
        }
        return redirect()->back()->with('mes','Sửa thành công');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('list-product')->with('mes','Xóa thành công!');
    }
}

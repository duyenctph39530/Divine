<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(4);
        $views = Product::orderByDesc('view')->paginate(4);
        $study1 = Product::where('category_id', '=', '1')->paginate(4);
        $study2 = Product::where('category_id', '=', '2')->paginate(4);
        $study3 = Product::where('category_id', '=', '3')->paginate(4);
        return view('client.index', compact(
            'products',
            'views',
            'study1',
            'study2',
            'study3'
        )
        );

    }
    public function list()
    {
        $products = Product::all();
        return view('client.product', compact('products'));
    }
    public function studyProduct()
    {
        $products = Product::where('category_id', '=', '3')->get();
        return view('client.study', compact('products'));
    }
    public function workProduct()
    {
        $products = Product::where('category_id', '=', '2')->get();
        return view('client.word', compact('products'));
    }
    public function entertaimentProduct()
    {
        $products = Product::where('category_id', '=', '1')->get();
        return view('client.entertaiment', compact('products'));
    }
    public function detailProduct($id)
    {
        $products = Product::findOrFail($id);
        $product = Product::where('category_id', $products->category_id)
            ->where('id', '<>', $products->id)
            ->limit(4)->get();
        return view('client.detail', compact('products', 'product'));

    }

    public function cartProduct()
    {
        $cart = session()->get('cart', []);
        return view('client.cart', compact('cart'));
    }

    public function addCart(Product $product)
    {
        // $product = Auth::product();
        $product = Product::findOrFail($product);

        $cart = session()->get('cart', []);

        // Nếu giỏ hàng trống, thêm sản phẩm mới vào giỏ hàng
        if (!isset($cart[$product])) {
            $cart[$product] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        } else {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
            $cart[$product]['quantity']++;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.product')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'LIKE', '%' . $search . '%')->get();
        return view('client.product', compact('products'));
    }
}

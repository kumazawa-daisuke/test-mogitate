<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::Paginate(6);
        return view('products', ['products' => $products]);
    }
    
    public function detail(Request $request)
    {
        $product = Product::find($request->id);
        return view('detail', ['form' => $product]);
    }

    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $item = $request->all();
        Product::create($item);
        return redirect('products');
    }
}

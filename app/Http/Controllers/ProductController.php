<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'product_name' => $product->product_name,
                'photo' => $product->photo,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product add to cart succssfully!');

    }
}

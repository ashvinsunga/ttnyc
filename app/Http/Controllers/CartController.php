<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart($id, Request $request)
    {
        $product = Product::find($id);

        $cart  = session('cart', []);

        $cart[$id] = [
            "name" => $product->product_name,
            "quantity" => 2,
            "price" => $product->product_price,
            "image" => $product->product_image,
            "description" => $product->product_description,
        ];

        session()->put("cart", $cart);

        return redirect()->back()->with("success", "Product added to the cart.");
    }

    public function cartUpdate(Request $request)
    {
        info($request->all());
        $cart = session("cart");

        $cart[$request->product_id]["quantity"] = $request->quantity;

        session()->put("cart", $cart);

        return response()->json(["success" => 1]);
    }
}

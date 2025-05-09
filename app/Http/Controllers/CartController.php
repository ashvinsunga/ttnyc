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
            "quantity" => $request->input('product_quantity'),
            "price" => $product->product_price,
            "image" => $product->product_image,
            "description" => $product->product_description,
        ];

        session()->put("cart", $cart);

        return redirect()->back()->with("success", "Product added to the cart.");
    }

    public function cartUpdate(Request $request)
    {
        // info($request->all());

        $cart = session("cart");

        if ($request->type == "update") {
            $cart[$request->product_id]["quantity"] = $request->quantity;
        } else {
            unset($cart[$request->product_id]);
        }


        session()->put("cart", $cart);
        $view = view("cart_items")->render();

        return response()->json(["success" => $view]);
    }
}

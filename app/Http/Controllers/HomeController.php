<?php


namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $clothes = Product::where('product_category', 'clothes')->get();
        return view('home', compact('products', 'clothes'));
    }
    //
}

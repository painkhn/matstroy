<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $randomProducts = Product::inRandomOrder()->take(12)->get();
        return view('welcome', ['random' => $randomProducts]);    
    }
    public function search(Request $request)
    {
        $word = $request->word;
        $results = Product::where('name', 'like', "%{$word}%")->orWhere('description', 'like', "%{$word}%")->orderBy('id')->get();
        return view('search', ['results' => $results]);
    }
    public function catalog()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
        return view('catalog', ['products' => $product]);
    }
    public function product_open($tovar_id)
    {
        $product = Product::where('id', $tovar_id)->first();
        return view('product', ['product'=>$product]);
    }
}

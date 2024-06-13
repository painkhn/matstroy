<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Product;
use App\Models\Buy;
use Auth;

class BasketController extends Controller
{
    public function basket_open()
    {
        $baskets = Basket::with('products')->where('user_id', Auth::user()->id)->get();
        return view('basket', ['baskets' => $baskets]);
    }

    public function add_basket($tovar_id)
    {
        $status = Basket::where('user_id', Auth::user()->id)->where('product_id', $tovar_id)->first();
        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $tovar_id,
        ];
        Basket::create($data);
        return redirect()->back();
    }
    public function buy_product($tovar_id)
    {
        $status = Buy::where('user_id', Auth::user()->id)->where('product_id', $tovar_id)->first();
        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $tovar_id,
        ];
        Buy::create($data);
        return redirect()->back();
    }
    public function del_basket($bakset_id)
    {
        Basket::where('id', $bakset_id)->delete();
        return redirect()->back();
    }
}

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
    // Открытие корзины
    {
        $baskets = Basket::with('products')->where('user_id', Auth::user()->id)->get(); // Получаем список товаров из корзины
        return view('basket', ['baskets' => $baskets]); // Открываем страницу и передаем товары из корзины
    }

    public function add_basket($tovar_id)
    // Добавление в корзины
    {
        $status = Basket::where('user_id', Auth::user()->id)->where('product_id', $tovar_id)->first(); // Проверяем, есть ли этот товар в корзине
        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $tovar_id,
        ];
        Basket::create($data); // Добавление в бд
        return redirect()->back(); // Возвращаем назад
    }
    public function buy_product($tovar_id)
    // Покупка продукта
    {
        $status = Buy::where('user_id', Auth::user()->id)->where('product_id', $tovar_id)->first();
        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $tovar_id,
        ];
        Buy::create($data); // Добавление в бд
        return redirect()->back(); // Возвращаем назад
    }
    public function del_basket($bakset_id)
    // Удаляем товар из корзины
    {
        Basket::where('id', $bakset_id)->delete(); // Удаляем из бд по айди
        return redirect()->back(); // Возвращаем назад
    }
}

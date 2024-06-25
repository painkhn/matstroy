<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    // Открытие главной страницы
    {
        $randomProducts = Product::inRandomOrder()->take(12)->get(); // Берем случайные 12 продуктов
        return view('welcome', ['random' => $randomProducts]); // Открываем главную страницу и передаем продукты
    }
    public function search(Request $request)
    // Поиск
    {
        $word = $request->word; // Получаем введненное слово
        $results = Product::where('name', 'like', "%{$word}%")->orWhere('description', 'like', "%{$word}%")->orderBy('id')->get(); // Ищем товары, где название или описание содержит это слово
        return view('search', ['results' => $results]); // Открываем страницу и передаем результат
    }
    public function catalog()
    // Открытие каталога
    {
        $product = Product::orderBy('created_at', 'DESC')->get(); // Получаем список продуктов
        return view('catalog', ['products' => $product]); // Открываем каталог и передаем продукты
    }
    public function product_open($tovar_id)
    // Открытие страницы товара
    {
        $product = Product::where('id', $tovar_id)->first(); // Ищем в бд по айди
        return view('product', ['product'=>$product]); // Открываем страницу продукта и передаем информацию о товаре
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class AdminController extends Controller
{
    public function index()
    // Открытие админки
    {
        return view('admin');    
    }
    public function new_product(Request $request)
    // Добавление нового продукта
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]); // Проверка валидации

        $name = time(). "." . $request->photo->extension();
        $destination = 'public/products';
        $path = $request->photo->storeAs($destination, $name); // Сохранение фото
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'photo' => 'storage/products/' . $name
        ]; // Собираем всю информацию о товаре
        Product::create($data); // Сохраняем в бд

        return redirect()->back(); // Возвращаем назад
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Buy;

class ProfileController extends Controller
{
    public function profile()
    // Открытие профиля
    {
        $buys = Buy::with('products')->where('user_id', Auth::user()->id)->get(); // Получаем список покупок
        return view('profile', ['buys' => $buys]); // Открываем профиль и передаем список покупок
    }
}

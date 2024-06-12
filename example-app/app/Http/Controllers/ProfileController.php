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
    {
        $buys = Buy::with('products')->where('user_id', Auth::user()->id)->get();
        return view('profile', ['buys' => $buys]);
    }
}

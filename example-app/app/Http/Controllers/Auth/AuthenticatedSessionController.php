<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Str;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('profile', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function yandex() // перенаправляем юзера на яндекс Auth
    {
        return Socialite::driver('yandex')->redirect();
    }

    public function yandexRedirect() {
        $user = Socialite::driver('yandex')->user();
        $existingUser = User::where('email', $user->email)->first();
        if (!$existingUser) {
            $newUser = User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'password'=>null,
            ]);

            Auth::login($newUser);
            return redirect(route('profile'));
        } else {
            if ($existingUser->password === null){
                Auth::login($existingUser);
                return redirect(route('profile'));
            } else {
                return redirect(route('login'))->with('error', 'Используйте логин-пароль для входа');
            }
        }
    }
}

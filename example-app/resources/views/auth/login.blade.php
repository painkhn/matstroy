@extends('layouts.auth')

@section('content')
    <div class="w-full min-h-screen flex items-center justify-center my-10">
        <div class="main_cont w-full">
            <div class="title text-center color-root-grey font-black text-4xl mb-20">
                <h1>Вход в аккаунт</h1>
            </div>
            <div class="login-block max-w-6xl w-full h-auto p-20 bg-grey-primary mx-auto my-0 rounded-2xl">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row flex items-center justify-between mb-20">
                        <div class="label text-white font-black text-4xl mr-20">
                            <label>Почта</label>
                        </div>
                        <div class="input w-9/12">
                            <input type="email" name="email"
                                class="w-full h-24 bg-white rounded-2xl px-10 text-3xl color-root-grey font-bold">
                        </div>
                    </div>
                    <div class="row flex items-center justify-between mb-20">
                        <div class="label text-white font-black text-4xl mr-20">
                            <label>Пароль</label>
                        </div>
                        <div class="input w-9/12">
                            <input type="password" name="password"
                                class="w-full h-24 bg-white rounded-2xl px-10 text-3xl color-root-grey font-bold">
                        </div>
                    </div>
                    <div class="fow flex items-center justify-between mb-20">
                        <div class="long-btn w-2/3 mr-10">
                            <a href="{{ route('register') }}">
                                <input value="Регистрация" type="button"
                                    class="bg-root-grey-light h-24 w-full color-root-yellow text-2xl font-black rounded">
                            </a>
                        </div>
                        <div class="short-btn w-1/3">
                            <input type="submit" value="Войти"
                                class="w-full h-24 bg-root-yellow color-root-grey-light text-2xl font-black rounded">
                        </div>
                    </div>
                </form>
                <a href="{{ route('yandex') }}">
                    <button class="w-full bg-root-yellow h-24 color-root-grey-light text-2xl font-black rounded mb-10">
                        Войти по Яндекс ID
                    </button>
                </a>
                <div class="link text-center">
                    <a href="/" class="text-white text-2xl font-black">На главную</a>
                </div>
            </div>
        </div>
    </div>
@endsection

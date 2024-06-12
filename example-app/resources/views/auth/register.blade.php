@extends('layouts.auth')

@section('content')
    <div class="w-full min-h-screen flex items-center justify-center py-20">
        <div class="main_cont w-full">
            <div class="title text-center color-root-grey font-black text-4xl mb-20">
                <h1>Регистрация</h1>
            </div>
            <div class="login-block max-w-6xl w-full h-auto p-20 bg-grey-primary mx-auto my-0 rounded-2xl">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row flex items-center justify-between mb-20">
                        <div class="label w-4/12 text-white font-black text-3xl mr-10 text-right">
                            <label>Имя пользователя</label>
                        </div>
                        <div class="input w-7/12">
                            <input type="text" name="name"
                                class="w-full h-24 bg-white rounded-2xl px-10 text-3xl color-root-grey font-bold">
                        </div>
                    </div>
                    <div class="row flex items-center justify-between mb-20">
                        <div class="label w-4/12 text-white font-black text-3xl mr-10 text-right">
                            <label>Почта</label>
                        </div>
                        <div class="input w-7/12">
                            <input type="email" name="email"
                                class="w-full h-24 bg-white rounded-2xl px-10 text-3xl color-root-grey font-bold">
                        </div>
                    </div>
                    <div class="row flex items-center justify-between mb-20">
                        <div class="label w-4/12 text-white font-black text-3xl mr-10 text-right">
                            <label>Пароль</label>
                        </div>
                        <div class="input w-7/12">
                            <input type="password" name="password"
                                class="w-full h-24 bg-white rounded-2xl px-10 text-3xl color-root-grey font-bold">
                        </div>
                    </div>
                    <div class="row flex items-center justify-between mb-20">
                        <div class="label w-4/12 text-white font-black text-3xl mr-10 text-right">
                            <label>Подтвердить пароль</label>
                        </div>
                        <div class="input w-7/12">
                            <input type="password" name="password_confirmation"
                                class="w-full h-24 bg-white rounded-2xl px-10 text-3xl color-root-grey font-bold">
                        </div>
                    </div>
                    <div class="fow flex items-center justify-between mb-20">
                        <div class="short-btn w-1/3 mr-10">
                            <a href="{{ route('login') }}">
                                <input type="button" value="Вход"
                                    class="bg-root-grey-light h-24 w-full color-root-yellow text-2xl font-black rounded">
                            </a>
                        </div>
                        <div class="long-btn w-2/3">
                            <input type="submit" value="Регистрация"
                                class="w-full h-24 bg-root-yellow color-root-grey-light text-2xl font-black rounded">
                        </div>
                    </div>
                </form>
                <div class="link text-center">
                    <a href="/" class="text-white text-2xl font-black">На главную</a>
                </div>
            </div>
        </div>
    </div>
@endsection

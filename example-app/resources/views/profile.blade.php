@extends('layouts.app')

@section('content')
    <div class="max-w-screen-2xl w-full h-auto mx-auto my-0 mb-20">
        <div class="title text-center color-root-grey font-black text-2xl mb-20">
            <h2>Личный кабинет</h2>
        </div>
        <div class="profile_info flex items-center mb-40">
            <div class="avatar">
                <img src="{{ asset('img/avatar_default.png') }}" alt=""
                    class="max-w-md w-full min-h-448px rounded-full">
            </div>
            <div class="user_info text-3xl font-black color-root-grey-light ml-20">
                <div class="name mb-8">
                    <p>{{ Auth::user()->name }}</p>
                </div>
                <div class="email">
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
        <div class="purchases mb-20">
            <div class="title color-root-grey font-black text-2xl mb-20">
                <h2>Мои покупки:</h2>
            </div>
            <ul class="grid grid-cols-5">
                <li>
                    <div class="max-w-72 w-full h-480px py-5">
                        <div class="max-w-44 w-full mx-auto my-0">
                            <img src="{{ asset('img/fame-1.png') }}" alt="" class="mx-auto my-0 max-h-52 mb-10">
                            <div class="title text-xs font-black color-root-grey-light mb-4">
                                <h3>Штукатурка гипсовая КРЕПС 30 кг</h3>
                            </div>
                            <div class="price color-root-grey-light font-black mb-8">
                                <div class="count w-6 h-4 bg-yellow-300 text-small text-center rounded mb-3">
                                    <p>шт</p>
                                </div>
                                <p><span>684</span> ₽</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="max-w-72 w-full h-480px py-5">
                        <div class="max-w-44 w-full mx-auto my-0">
                            <img src="{{ asset('img/fame-1.png') }}" alt="" class="mx-auto my-0 max-h-52 mb-10">
                            <div class="title text-xs font-black color-root-grey-light mb-4">
                                <h3>Штукатурка гипсовая КРЕПС 30 кг</h3>
                            </div>
                            <div class="price color-root-grey-light font-black mb-8">
                                <div class="count w-6 h-4 bg-root-yellow text-small text-center rounded mb-3">
                                    <p>шт</p>
                                </div>
                                <p><span>684</span> ₽</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="max-w-72 w-full h-480px py-5">
                        <div class="max-w-44 w-full mx-auto my-0">
                            <img src="{{ asset('img/fame-1.png') }}" alt="" class="mx-auto my-0 max-h-52 mb-10">
                            <div class="title text-xs font-black color-root-grey-light mb-4">
                                <h3>Штукатурка гипсовая КРЕПС 30 кг</h3>
                            </div>
                            <div class="price color-root-grey-light font-black mb-8">
                                <div class="count w-6 h-4 bg-root-yellow text-small text-center rounded mb-3">
                                    <p>шт</p>
                                </div>
                                <p><span>684</span> ₽</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
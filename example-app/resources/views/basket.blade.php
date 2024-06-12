@extends('layouts.app')

@section('content')
    <div class="max-w-screen-2xl w-full h-auto mx-auto my-0 mb-20">
        <div class="title text-center color-root-grey font-black text-2xl mb-20">
            <h2>Корзина</h2>
        </div>
        <ul class="grid grid-cols-5">
            @foreach ($baskets as $basket)
                @foreach ($basket->products as $product)
                    <li>
                        <div class="max-w-72 w-full h-480px py-5">
                            <div class="max-w-44 w-full mx-auto my-0">
                                <img src="{{ asset($product->photo) }}" alt="" class="mx-auto my-0 max-h-52 mb-10">
                                <div class="title text-xs font-black color-root-grey-light mb-4">
                                    <h3>{{ $product->name }}</h3>
                                </div>
                                <div class="price color-root-grey-light font-black mb-8">
                                    <div class="count w-6 h-4 bg-yellow-300 text-small text-center rounded mb-3">
                                        <p>шт</p>
                                    </div>
                                    <p><span>{{ $product->price }}</span> ₽</p>
                                </div>
                                <div class="submit">
                                    <a href="{{ route('BuyProduct', ['tovar_id' => $product->id]) }}">
                                        <input type="submit" value="Купить"
                                            class="w-full h-12 bg-yellow-300 color-root-grey-light text-xs font-black rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @endforeach
        </ul>
    </div>
@endsection

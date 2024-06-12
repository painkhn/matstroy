@extends('layouts.app')

@section('content')
    <div class="max-w-screen-2xl w-full h-auto mx-auto my-0 mb-20">
        <div class="flex justify-between pt-20 mb-40">
            <div class="product-main_info">
                <img src="{{ asset($product->photo) }}" alt="Product Image">
                <div class="title text-center color-root-grey-light font-black text-4xl">
                    <h3>{{ $product->name }}</h3>
                </div>
            </div>
            <div class="price_info max-w-md w-full">
                <div class="title text-center color-root-grey-light font-black text-2xl mb-10">
                    <h3>Цена: <span>{{ $product->price }} </span>₽</h3>
                </div>
                <div class="submit">
                    <a href="{{ route('AddBasket', ['tovar_id' => $product->id]) }}">
                        <input type="submit" value="Добавить в корзину"
                            class="w-full h-16 bg-root-yellow color-root-grey-light text-2xl font-black rounded">
                    </a>
                </div>
            </div>
        </div>
        <div class="desc mb-40">
            <div class="title color-root-grey-light font-black text-4xl mb-20">
                <h2>Описание</h2>
            </div>
            <div class="desc-cont color-root-grey-light font-black text-2xl">
                <p>
                    {{ $product->description }}
                </p>
            </div>
        </div>
    </div>
@endsection

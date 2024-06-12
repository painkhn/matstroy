@extends('layouts.app')

@section('content')
    <div class="max-w-screen-2xl w-full h-auto mx-auto my-0 mb-20">
        <div class="title color-root-grey font-black text-2xl mb-20">
            <h2>Популярные товары</h2>
        </div>
        <ul class="grid grid-cols-5">
            @if (!empty($random))
                @foreach ($random as $item)
                    <li>
                        <div class="max-w-72 w-full h-480px py-5">
                            <div class="max-w-44 w-full mx-auto my-0">
                                <img src="{{ asset($item->photo) }}" alt="" class="mx-auto my-0 max-h-52 mb-10">
                                <div class="title text-xs font-black color-root-grey-light mb-4">
                                    <h3>{{ $item->name }}</h3>
                                </div>
                                <div class="price color-root-grey-light font-black mb-8">
                                    <div class="count w-6 h-4 bg-yellow-300 text-small text-center rounded mb-3">
                                        <p>шт</p>
                                    </div>
                                    <p><span>{{ $item->price }}</span> ₽</p>
                                </div>
                                <div class="submit">
                                    <input type="submit" value="Добавить в корзину"
                                        class="w-full h-12 bg-yellow-300 color-root-grey-light text-xs font-black rounded">
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @else
                <h3>Товаров нет</h3>
            @endif
        </ul>
    </div>
    <div class="max-w-1725px w-full h-auto mx-auto my-0">
        <div class="flex justify-between">
            <div
                class="w-45pr min-h-550 bg-grey-primary flex justify-center items-center font-black text-3xl color-root-yellow">
                <p>О компании</p>
            </div>
            <div class="w-45pr min-h-550 bg-root-yellow px-20 py-8 color-root-grey-light italic text-xl">
                <p>Компания МАТСТРОЙ - это интернет-магазин стройматериалов, который работает на рынке поставок строительных
                    материалов с 2024 года. Мы предлагаем оптимальное соотношение цена-качество, работаем только с
                    сертифицированными материалами и имеем индивидуальный подход к каждому клиенту.
                    <br>
                    <br>
                    Наша миссия - помочь нашим клиентам воплотить их проекты в жизнь,
                    <br>
                    <br>
                    обеспечивая их всеми необходимыми ресурсами. Мы сотрудничаем с рядом строительных организаций, которые
                    помогут вам пройти путь от проекта до его воплощения в жизнь.Мы расширяем ассортимент поставляемых
                    строительных материалов каждый год, придерживаясь базовых принципов: надежность и качество. Наша команда
                    состоит из опытных специалистов, которые готовы помочь вам в выборе необходимых материалов и
                    инструментов.
                </p>
            </div>
        </div>
    </div>
@endsection

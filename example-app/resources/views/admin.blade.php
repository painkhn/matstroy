@extends('layouts.app')

@section('content')
    <div class="max-w-screen-2xl w-full h-auto mx-auto my-0 mb-20">
        <div class="title text-center color-root-grey font-black text-2xl mb-10">
            <h2>ПАНЕЛЬ АДМИНИСТРАТОРА</h2>
        </div>
        <div class="title text-center color-root-grey font-black text-xl mb-20">
            <h3>Добавление товара</h3>
        </div>
        <form class="w-full" action="{{ route('NewProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-between">
                <div class="input w-5/12">
                    <div class="grid grid-cols-1 grid-rows-3 min-h-448px max-w-md">
                        <input type="text" class="border-b-2 border-black h-10 px-6 w-full" placeholder="Название"
                            name="name">
                        <input type="text" class="border-b-2 border-black h-10 px-6 w-full" placeholder="Цена"
                            name="price">
                        <input type="text" class="border-b-2 border-black h-10 px-6 w-full" placeholder="Описание"
                            name="description">
                    </div>
                </div>
                <div class="add_image w-5/12">
                    <div class="title text-center color-root-grey font-black text-lg mb-5">
                        <h4>Добавить фотографию товара</h4>
                    </div>
                    <div class="input">
                        <label
                            class="block py-10 rounded-xl overflow-hidden bg-root-yellow cursor-pointer hover:shadow-xl hover:shadow-gray-300 transition-all">
                            <input type="file" class="hidden" name="photo">
                            <div
                                class="flex flex-col justify-center items-center h-full color-root-grey font-black uppercase text-sm">
                                ВЫБЕРИТЕ ФАЙЛ
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="submit text-center">
                <input type="submit" value="Добавить товар"
                    class="max-w-md w-full py-7 bg-root-yellow color-root-grey-light text-xl font-black rounded">
            </div>
        </form>
    </div>
@endsection

<header class="header">
    <div class="header_cont max-w-1685px min-h-195px mx-auto my-0 flex items-center justify-between">
        <div class="flex justify-between w-full items-center">
            <div class="logo">
                <a href="{{ route('index') }}" title="Главная страница">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </a>
                <div class="text-center">
                    <a href="{{ route('catalog') }}" class="color-root-grey font-black">
                        Каталог
                    </a>
                </div>
            </div>
            <form action="{{ route('Search') }}" class="search w-full flex items-center justify-end" method="POST">
                @csrf
                <input type="search" name="word"
                    class="max-w-3xl w-full h-11 bg-gray-100 px-4 rounded-xl focus:shadow-xl transition-all"
                    placeholder="Поиск...">
                <button type="submit" title="Поиск" class="ml-5">
                    <img src="{{ asset('img/search-icon.svg') }}" alt="" class="max-w-8">
                </button>
            </form>
        </div>
        <nav class="nav w-3/5 flex justify-end">
            <div class="cart">
                <a href="#!" title="Корзина" class="flex items-center color-root-grey font-black text-xl">
                    <img src="{{ asset('img/cart-icon.svg') }}" alt="" class="mr-5">
                    Ваша корзина
                </a>
            </div>
            <div class="header_profile ml-16">
                <a href="#!" title="Личный кабинет" class="flex items-center color-root-grey font-black text-xl">
                    <img src="{{ asset('img/user-icon.svg') }}" alt="" class="mr-5 w-8">
                    Личный кабинет
                </a>
            </div>
        </nav>
    </div>
</header>

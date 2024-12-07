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
        <div>
            <!-- График новых пользователей -->
            <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 mx-auto my-10">
                <div class="flex justify-between">
                    <div>
                        <h3 class="font-bold text-2xl mb-2">
                            Всего пользователей: 52
                        </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Пользоваталей за неделю</p>
                    </div>
                </div>
                <div id="area-chart"></div>
                <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                </div>
            </div>
            <!-- Отчёт о новых пользователях в excel -->
            <button class="max-w-md w-full py-7 bg-root-yellow color-root-grey-light text-xl font-black rounded mx-auto block">
                Скачать отчёт
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/api/new-users')
                .then(response => response.json())
                .then(data => {
                    const dates = Object.keys(data);
                    const counts = Object.values(data);

                    const options = {
                        chart: {
                            height: "100%",
                            maxWidth: "100%",
                            type: "area",
                            fontFamily: "Inter, sans-serif",
                            dropShadow: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        tooltip: {
                            enabled: true,
                            x: {
                                show: false,
                            },
                        },
                        fill: {
                            type: "gradient",
                            gradient: {
                                opacityFrom: 0.55,
                                opacityTo: 0,
                                shade: "#1C64F2",
                                gradientToColors: ["#1C64F2"],
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            width: 6,
                        },
                        grid: {
                            show: false,
                            strokeDashArray: 4,
                            padding: {
                                left: 2,
                                right: 2,
                                top: 0
                            },
                        },
                        series: [
                            {
                                name: "New users",
                                data: counts,
                                color: "#1A56DB",
                            },
                        ],
                        xaxis: {
                            categories: dates,
                            labels: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                        },
                        yaxis: {
                            show: false,
                        },
                    };

                    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
                        const chart = new ApexCharts(document.getElementById("area-chart"), options);
                        chart.render();
                    }
                });
        });
    </script>
@endsection
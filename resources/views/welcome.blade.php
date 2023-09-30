<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- Шапка сайта -->
<header class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-semibold">Ваш магазин</h1>
        <nav class="space-x-4">
            <!-- Кнопка для открытия категорий -->
            <button
                x-data="{ open: false }"
                @click="open = !open"
                class="text-white hover:underline focus:outline-none">
                Категории
            </button>

            <!-- Поле поиска -->
            <input type="text" placeholder="Поиск..." class="px-2 py-1 border rounded-lg focus:outline-none">

            <!-- Корзина -->
            <a href="#" class="text-white hover:underline">Корзина</a>

            <!-- Избранные товары -->
            <a href="#" class="text-white hover:underline">Избранные</a>
        </nav>
    </div>

    <!-- Выпадающее меню с категориями -->
    <div
        x-show="open"
        @click.away="open = false"
        class="mt-2 absolute bg-white border border-gray-200 w-32 p-2 rounded-lg shadow-md"
        style="display: none;">
        <ul>
            <li><a href="#" class="text-blue-500 hover:underline">Категория 1</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Категория 2</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Категория 3</a></li>
        </ul>
    </div>
</header>

<!-- Основное содержимое страницы -->
<!-- Основное содержимое страницы -->
<main class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-4">Категории</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Пример категории -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <h3 class="text-lg font-semibold">Категория 1</h3>
            <p class="text-gray-600">Описание категории 1</p>
            <a href="#" class="text-blue-500 hover:underline mt-2">Посмотреть товары</a>
        </div>

        <!-- Пример категории -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <h3 class="text-lg font-semibold">Категория 2</h3>
            <p class="text-gray-600">Описание категории 2</p>
            <a href="#" class="text-blue-500 hover:underline mt-2">Посмотреть товары</a>
        </div>

        <!-- Пример категории -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <h3 class="text-lg font-semibold">Категория 3</h3>
            <p class="text-gray-600">Описание категории 3</p>
            <a href="#" class="text-blue-500 hover:underline mt-2">Посмотреть товары</a>
        </div>
    </div>

    <h2 class="text-2xl font-semibold mt-8 mb-4">Товары</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($products as $product)
            <!-- Пример товара -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ $product->mainImage() }}" alt="Продукт 1" class="w-full h-40 object-cover">
                <h3 class="text-lg font-semibold mt-2">{{ $product->title }}</h3>
                <p class="text-blue-500 font-semibold mt-2">{{ $product->price_netto }} zl</p>
                <button class="bg-blue-500 text-white px-4 py-2 mt-4 hover:bg-blue-600 rounded">Добавить в корзину</button>
            </div>
        @endforeach
    </div>
</main>

<!-- Подвал сайта -->
<footer class="bg-gray-800 text-white p-4 mt-8">
    <div class="container mx-auto">
        <p class="text-gray-600 text-center">&copy; 2023 Ваш магазин. Все права защищены.</p>
    </div>
</footer>

</body>
</html>

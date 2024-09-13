<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('Title','Base')</title>
</head>
<body class="bg-[#ff9898] min-h-screen flex flex-col justify-between">
    <!-- Header/NavBar -->
    <header class="bg-white border-b border-gray-200 dark:bg-gray-900">
        <nav class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="text-2xl font-semibold text-gray-900 dark:text-white">Flowbite</span>
            </a>
            <div class="hidden md:block">
                <ul class="flex space-x-6 text-gray-900 dark:text-white">
                    <li><a href="#" class="hover:text-blue-500">Home</a></li>
                    <li><a href="#" class="hover:text-blue-500">Sobre</a></li>
                    <li><a href="/admin" class="hover:text-blue-500">Login</a></li>
                    <li><a href="#" class="hover:text-blue-500">Contatos</a></li>
                    <li><a href="#" class="hover:text-blue-500">Localização</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-[500px] flex items-center justify-center text-center bg-hero-pattern text-white">
        <div class="bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="text-5xl font-bold mb-4">Welcome to Flowbite!</h1>
            <p class="text-lg mb-6">Your one-stop shop for the finest products. Explore our exclusive collections today.</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700">Shop Now</a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-12 bg-white">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-900">Our Exclusive Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($products as $product)
                <a href="#" class="flex flex-col bg-white border border-gray-200 rounded-lg shadow hover:shadow-xl transition-shadow duration-300">
                    <img class="object-cover w-full h-64 rounded-t-lg" src="{{ asset('storage/'.$product->image) }}" alt="">
                    <div class="p-4">
                        <h5 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $product->typeofproducts->name }}</h5>
                        <p class="text-gray-700 mt-2">{{ $product->description }}</p>
                    </div>
                    <div class="p-4 bg-gray-100">
                        <p class="text-lg font-semibold text-gray-900">{{ $product->price }}$</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-screen-xl mx-auto text-center">
            <p class="text-lg">&copy; 2023 Flowbite™. All Rights Reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="hover:underline">About</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Licensing</a>
                <a href="#" class="hover:underline">Contact</a>
            </div>
        </div>
    </footer>
</body>

</html>
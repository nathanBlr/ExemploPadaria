@extends('base.base')
@section('Title','Index')
@section('main')
<div class="h-full w-full p-8">
    <div class="flex  justify-between gap-4">
        @foreach ($products as $product)
            <!-- Display each product, regardless of the type -->
            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/'.$product->image) }}" alt="">
                <div class="p-4 flex flex-col">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->typeofproducts->name }}</h5>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
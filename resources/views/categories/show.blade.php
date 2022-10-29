<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{$category->name}}

                <h3 >Products</h3>
                <hr class="my-3">
                @foreach ($category->products as $product)
                    {{$product->name}}<br>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

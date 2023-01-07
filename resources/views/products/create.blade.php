<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produkt') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="post" action="{{route('product.store')}}">
                    @csrf
                    <input type="text" name="name" placeholder="name" style="width: 100%; margin-bottom: 10px;">
                    <input type="number" name="price" placeholder="price" step="0.01" style="width: 100%; margin-bottom: 10px;">
                    <input type="hidden" name="categoryId" value="{{$categoryId}}">
                    <button type="submit" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                        Dodaj produkt
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

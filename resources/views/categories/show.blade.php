<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produkty') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{$category->name}}</h2>
                <hr class="my-3">

                <form method="get">
                    <input type="text" name="search">
                    <input type="submit" value="szukaj">
                </form>
                
                @if(auth()->user()?->isModerator())
                    <a href="{{route('product.create', ['categoryId' => $category->id])}}">
                        <button type="button" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Dodaj produkt
                        </button>
                    </a>
                    <a href="{{route('category.edit', ['category' => $category])}}">
                        <button type="button" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Edytuj kategorie
                        </button>
                    </a>
                    <form action="{{ route('category.destroy', ['category' => $category]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Usuń kategorie
                        </button>
                    </form>
                @endif

                @if(count($products) > 0 )
                    <div class="grid grid-cols-4 gap-4">
                    @foreach ($products as $product)
                        <a href="{{route('product.show', ['product' => $product->id])}}" class="text-center shadow-lg mb-4 pb-3">
                            <img src="{{url('/images/palceholder.png')}}" alt="Placeholder"/>
                            <p>{{$product->name}}</p>
                            <p>{{$product->price}}zł</p>
                        </a>
                    @endforeach

                </div>
                {{ $products->links() }}
                @else
                    Brak produktów dla podanej kategorii
                @endif
        </div>
    </div>
</x-app-layout>

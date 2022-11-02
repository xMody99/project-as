<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(count($categories) > 0 )
                    <div class="grid grid-cols-4 gap-4">
                    @foreach ($categories as $category)
                                @foreach ($category->products as $product)
                                    <a href="{{route('category.show', ['category' => $category->id])}}" class="text-center shadow-lg mb-4 pb-3">
                                        <img src="{{url('/images/palceholder.png')}}" alt="Placeholder"/>
                                        <p>{{$category->name}}</p>
                                    </a>
                                @endforeach
                    @endforeach
                    </div>
                @else
                    Brak kategorii
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

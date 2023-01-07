<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(auth()->user()?->isModerator())
                    <a href="{{route('category.create')}}">
                        <button type="button" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Dodaj kategorie
                        </button>
                    </a>
                @endif
                @if(count($categories) > 0 )
                    <div class="grid grid-cols-4 gap-4">
                    @foreach ($categories as $category)
                        <a href="{{route('category.show', ['category' => $category->id])}}" class="text-center shadow-lg mb-4 pb-3">
                            <img src="{{url('/images/palceholder.png')}}" alt="Placeholder"/>
                            <p>{{$category->name}}</p>
                        </a>
                    @endforeach
                    </div>
                @else
                    Brak kategorii
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

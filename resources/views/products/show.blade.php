<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mb-4 pb-3 flex">
                    <img src="{{url('/images/palceholder.png')}}" alt="Placeholder" class="w-1/2"/>
                    <div class="w-1/ mt-3">
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight">{{$product->name}}</h1>
                        <p class="text-gray-500">{{$product->price}}zł</p>
                        <p class="mt-3 mb-4">Morbi a metus vel diam pharetra ullamcorper ut eget odio. Aenean mi diam, porttitor aliquet velit nec, placerat gravida nunc. Donec eu enim semper, elementum dolor sed, congue nibh. In tortor nisl, egestas quis malesuada nec, euismod in velit. Phasellus non dui dolor. Aenean mattis elit nec sem sagittis commodo. Ut id mi vehicula, aliquet erat vel, tempor neque. In elementum imperdiet risus sit amet dignissim. Etiam dignissim dolor tempus dui luctus, et ornare diam dapibus. Sed congue fringilla lacus.

                        <livewire:add-product :productId="$product->id">
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>

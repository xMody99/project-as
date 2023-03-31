<div>
    <div class="flex">
        @if (!auth()->user())
            Zaloguj się, aby korzystać z koszyka
        @else
            <div class="custom-number-input h-10 w-1/2">
                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                    <button wire:click="descrease" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                        <span class="m-auto text-2xl font-thin">−</span>
                    </button>
                    <input type="number" wire:model="quantity" wire:change="check" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
                    <button wire:click="increase" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                        <span class="m-auto text-2xl font-thin">+</span>
                    </button>
                </div>
            </div>
            <div class="w-1/2">

                    <button type="button" wire:click="addToCart" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                        Dodaj
                    </button>
            </div>
        @endif

    </div>
</div>

<div>
    {{$user->id}}.
    <input wire:model="user.name" type="text" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1">
    <input wire:model="user.email" type="text" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1">
    <select wire:model="user.roleId">
        @foreach ($roles as $id => $role)
            <option value="{{$id}}"
                @if ($id == $user->roleId)
                    selected
                @endif
            >{{$role}}</option>
        @endforeach
    </select>
    <button wire:click="delete" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">Usuń</button>
    <button wire:click="save" class="inline-flex items-right mt-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">Zapisz</button>
</div>

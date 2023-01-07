<div>
            {{$user->id}} |
            <input wire:model="user.name" type="text"> |
            <input wire:model="user.email" type="text"> |
            <select wire:model="user.roleId">
                @foreach ($roles as $id => $role)
                    <option value="{{$id}}"
                        @if ($id == $user->roleId)
                            selected
                        @endif
                    >{{$role}}</option>
                @endforeach
            </select> |
            <button wire:click="delete">Usuń</button>
            <button wire:click="save">Save</button>
    </tr>
</div>

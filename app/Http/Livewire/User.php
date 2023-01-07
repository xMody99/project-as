<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;
use App\Models\User as UserModel;
use Exception;

class User extends Component
{
    public $user;
    public $roles;

    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required|email',
        'user.roleId' => 'required|int',
    ];

    public function mount($user)
    {
        $this->user = $user;

        $roleModels = Role::all();
        $this->roles = [];

        foreach ($roleModels as $model) {
            $this->roles[$model->id] = $model->name;
        }
    }

    public function render()
    {
        return view('livewire.user');
    }

    public function save()
    {
        $this->user->save();
    }

    public function delete()
    {
        $this->user->delete();
    }
}

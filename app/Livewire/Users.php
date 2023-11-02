<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users;

    public function deleteUser($user_id) {
        User::destroy($user_id);
    }

    public function render()
    {
        $this->users = User::all();
        // dd( $this->users);
        return view('livewire.user');
    }
}

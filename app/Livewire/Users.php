<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::all();
        // dd( $this->users);
        return view('livewire.user');
    }

    public function addUser() {

        if($this->task == null){
            return;
        }
        
        DB::table('tasks')->insert([
            'name' => $this->task,
            'status' => 'A fazer',
            'user_id' => 2
        ]);

        $this->reset('task');
    }
}

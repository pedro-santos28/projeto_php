<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Tasks extends Component
{
    public $tasks;
    public $task; 
    public $search;
    public $users;
    public $user_id;

    public function filterTask(){
        if(empty($this->search)) {
            $this->tasks = Task::with('User', 'Status')->get();
            $this->users = User::all();

        }else{
            $this->tasks = Task::where("name", "like", "%$this->search%")->get();
        }
    }

    public function addTask() {
        if($this->task == null){
            return;
        }
        
        DB::table('tasks')->insert([
            'name' => $this->task,
            'status_id' => 1,
            'user_id' => $this->user_id,
        ]);

        $this->reset('task');
    }

    public function deleteTask($task_id) {
        Task::destroy($task_id);
    }
    
    public function render()
    {
        $this->filterTask();
        return view('livewire.task');
    }
}

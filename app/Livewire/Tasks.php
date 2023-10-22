<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class Tasks extends Component
{
    public $tasks;
    public $task; 
    public $search;

    public function filterTask(){
        if(empty($this->search)) {
            $this->tasks = Task::with('User', 'Status')->get();
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
            'status' => 'A fazer',
            'user_id' => 2
        ]);

        $this->reset('task');
    }
    
    public function render()
    {
        $this->filterTask();
        return view('livewire.task');
    }
}

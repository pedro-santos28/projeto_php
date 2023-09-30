<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function getTasks() {
        $tasks = ['task1', 'task2', ' task3'];
        return view('home', compact('tasks'));
    }

    public function addTask() {
        $title = "Inserção de tarefas";
        return view('add_task', compact('title'));
    }
}

<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="overflow-x-auto flex flex-col gap-8">

        <div class="flex gap-2 items-center justify-between">
            <div class="flex gap-2 items-center">
                <label class="flex gap-2 items-center">
                    <span>Nova tarefa</span>
                    <input type="text" wire:model="task" class="input border-2 border-amber-500">
                </label>
                <button wire:click="addTask" class="btn btn-success">Adicionar</button>
            </div>

            <div>
                <input wire:model.live="search" type="text" placeholder="Filtrar tarefas" class="input border-2 border-amber-500">
            </div>
        </div>
    
    <table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Task</th>
            <th>Status</th>
            <th>User</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="hover">
                <th>{{$task->id}}</th>
                <td class="text-amber-600 font-bold">{{$task->name}}</td>
                <td class="text-amber-600">{{$task->status}}</td>
                <td class="text-amber-600">{{$task->user_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
</div>

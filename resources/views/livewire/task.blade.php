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
                <h2 class="text-green-500 font-bold">Usuário atual</h2>
            <select wire:model.blur="user_id" class="select select-bordered w-full max-w-xs">
                <option value="" selected>Selecione o usuário</option> 
                @forelse($users as $user)
                    <option value={{$user->id}}>{{$user->name}}</option>
                @empty
                    <p>Sem usuarios cadastrados</p>
                @endforelse
            </select>
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
            <td></td>
        </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="hover">
                <th>{{$task->id}}</th>
                <td class="text-amber-600 font-bold">{{$task->name}}</td>
                <td class="text-amber-600">
                  {{$task->status->name}}
                </td>
                <td class="text-amber-600">{{$task->user->name}}</td>
                <td>
                    <i wire:click="deleteTask('{{ $task->id }}')" class="ph-bold ph-trash text-2xl hover:text-red-600 cursor-pointer"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
</div>

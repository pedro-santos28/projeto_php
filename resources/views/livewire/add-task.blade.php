<div class="w-full flex flex-col items-center">
    <form class="shadow-xl border p-4 rounded border-gray-700 mt-4 flex flex-col space-y-4 max-w-[800px] items-center justify-center w-full" wire:submit.prevent="addTask">
    <h1 class="text-2xl text-amber-500 font-medium">Nova tarefa</h1>
        <div class="w-full max-w-xs">
            <label> Tarefa </label>
            <input wire:model.blur="name" type="text" placeholder="Nome da tarefa" class="input input-bordered w-full max-w-xs" />
            @error('name') <span class="text-red-500">{{$message}}</span> @enderror
        </div>

        <div class="w-full max-w-xs">
            <label> Usuário </label>
            <select wire:model.blue="user_id" class="select select-bordered w-full max-w-xs">
                <option selected>Selecione um usuário</option>
                @forelse ($users as $user)
                    <option value={{$user->id}}>{{$user->name}}</option>
                @empty
                    <p>Sem usuários cadastrados</p>
                @endforelse
            </select>
            @error('user_id') <span class="text-red-500">{{$message}}</span> @enderror
        </div>

        <div class="self-end">
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

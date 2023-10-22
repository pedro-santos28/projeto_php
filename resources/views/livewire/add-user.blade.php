<div class="w-full flex flex-col items-center">
    <form class="shadow-xl border p-4 rounded border-gray-700 mt-4 flex flex-col space-y-4 max-w-[800px] items-center justify-center w-full" wire:submit.prevent="addUser">
    <h1 class="text-2xl text-amber-500 font-medium">Criar usuário</h1>
        <div class="w-full max-w-xs">
            <label> Nome do usuário </label>
            <input wire:model.blur="name" type="text" placeholder="Nome de usuário" class="input input-bordered w-full max-w-xs" />
            @error('name') <span class="text-red-500">{{$message}}</span> @enderror
        </div>

        <div class="w-full max-w-xs">
            <label> Perfil </label>
            <select wire:model.blur="profile_id" class="select select-bordered w-full max-w-xs">
                <option value="" selected>Selecione o perfil</option> 
               @forelse ($profiles as $profile)
                    <option value={{$profile->id}}>{{$profile->name}}</option>
                @empty
                    <p>Sem perfis cadastrados</p>
                @endforelse
            </select>
            @error('profile_id') <span class="text-red-500">{{$message}}</span> @enderror
        </div>

        <div class="self-end">
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

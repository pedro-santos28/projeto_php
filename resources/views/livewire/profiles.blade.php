<div class="overflow-x-auto flex flex-col gap-8">

    <div class="flex gap-2 items-center justify-between">
        <div class="flex gap-2 items-center">
            <label class="flex gap-2 items-center">
                <span>Novo perfil</span>
                <input type="text" wire:model="profile" class="input border-2 border-amber-500">
            </label>
            <button wire:click="addProfile" class="btn btn-success">Adicionar</button>
        </div>

        <div>
            <input wire:model.live="search" type="text" placeholder="Filtrar perfis" class="input border-2 border-amber-500">
        </div>
    </div>

    <h1>Perfis cadastrados</h1>
    <table  wire:poll.750ms class="table">
    <thead>
        <tr>
            <th></th>
            <th>Tipo</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($profiles as $profile)
            <tr >
                <th>{{$profile->id}}</th>
                <td class="text-amber-600">{{$profile->name}}</td>
                <td>
                    <i wire:click="deleteProfile('{{ $profile->id }}')" class="ph-bold ph-trash text-2xl hover:text-red-600 cursor-pointer"></i>
                </td>
            </tr>

            @empty
                <tr>
                    <td>Não existem perfis cadastrados...</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
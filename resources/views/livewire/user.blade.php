<div class="overflow-x-auto">
    <h1>Usuários cadastrados</h1>
    <table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <th>1</th>
                <td class="text-amber-600">{{$user->name}}</td>
            </tr>

            @empty
                <tr class="">
                    <td>Não existem usuários cadastrados...</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
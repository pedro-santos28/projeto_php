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
            <tr class="hover:bg-amber-600 hover:text-white">
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
            </tr>

            @empty
                <tr class="">
                    <td>Não existem usuários cadastrados...</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
<div class="overflow-x-auto">

    <!-- mensagem da sessão     -->
    @if (session()->has('response'))
        <div class="bg-green-300 text-black font-bold p-4 text-lg mb-3">
            {{session('response')}}
        </div>
    @endif

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
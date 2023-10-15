<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\User;

class AddUser extends Component
{
    public $profiles;
    public $profile_id = 1;
    public $name;

    public function addUser() {
        //cria o objeto do modelo
        $user = new User();

        //copia os dados sincronazidos do formulario para o objeto
        $user->profile_id = $this->profile_id;
        $user->name = $this->name;

        //mando salvar no BD
        $user->save();

        //Vou gravar mensagem na sessão
        //O flash é para que a mensagem seja apagada da sessão logo após ser exibida
        session()->flash('response', 'Usuário cadastrado com sucesso!');

        //Redireciona para a lista de usuários
        $this->redirect('/users', navigate: true);
    }

    
    public function render()
    {
        $this->profiles = Profile::all();
        return view('livewire.add-user');
    }
}

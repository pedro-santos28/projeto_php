<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Task;
use Livewire\Attributes\Rule;

class AddTask extends Component
{

    public $users;
    
    #[Rule('required|integer', as: "Usuário")]
    public $user_id;

    #[Rule('required|string|min:3', as: "Nome")]
    public $name;

    public function addTask() {

        #valida o form de acordo com as regras definidas nas propriedades
        #caso haja erro de validação, o método validate() retorna uma mensagem de erro disponível na view
        $this->validate();

        //cria o objeto do modelo
        $task = new Task();

        //copia os dados sincronazidos do formulario para o objeto
        $task->user_id = $this->user_id;
        $task->name = $this->name;

        //mando salvar no BD
        $task->save();

        //Vou gravar mensagem na sessão
        //O flash é para que a mensagem seja apagada da sessão logo após ser exibida
        session()->flash('response', 'Tarefa cadastrada com sucesso!');

        //Redireciona para a lista de usuários
        $this->redirect('/', navigate: true);
    }


    public function render()
    {
        $this->users = User::all();
        return view('livewire.add-task');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class Profiles extends Component
{
    public $search;
    public $profiles;
    public $profile;

    public function filterProfile(){
        if(empty($this->search)) {
            $this->profiles = Profile::all();
            // dd($this->profiles);
        }else{
            $this->profiles = Profile::where("name", "like", "%$this->search%")->get();
        }
    }

    public function addProfile() {
        if($this->profile == null){
            return;
        }
        DB::table('profiles')->insert([
            'name' => $this->profile,
        ]);
        $this->reset('profile');
    }

    public function deleteProfile($profile_id) {
        $deleted = DB::table('profiles')->where('id', '=', $profile_id)->delete();
    }

    public function render()
    {
        $this->filterProfile();
        return view('livewire.profiles');
    }
}

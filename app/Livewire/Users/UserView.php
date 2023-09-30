<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserView extends Component
{
    public $user;

    public function mount($id){
        $this->user = User::with('user_files')->where('id', $id)->first();
    }
    public function render()
    {
        return view('livewire.users.user-view')->layout('layouts.app');
    }
}

<?php

namespace App\Livewire\Users;

use App\Traits\UserTrait;
use Livewire\Component;

class AgronomistListView extends Component
{
    use UserTrait;
    public $guests;

    public function render()
    {
        $this->guests = $this->user_type('agronomist');
        return view('livewire.users.agronomist-list-view')->layout('layouts.app');
    }
}

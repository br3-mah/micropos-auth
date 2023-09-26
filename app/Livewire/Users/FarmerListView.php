<?php

namespace App\Livewire\Users;

use App\Traits\UserTrait;
use Livewire\Component;

class FarmerListView extends Component
{
    use UserTrait;
    public $guests;

    public function render()
    {
        $this->guests = $this->user_type('farmer');
        return view('livewire.users.farmer-list-view')->layout('layouts.app');
    }
}

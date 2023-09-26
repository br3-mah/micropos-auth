<?php

namespace App\Livewire\Users;

use App\Traits\UserTrait;
use Livewire\Component;

class AdvisorListView extends Component
{
    use UserTrait;
    public $guests;

    public function render()
    {
        $this->guests = $this->user_group('advisory');
        return view('livewire.users.advisor-list-view')->layout('layouts.app');
    }
}

<?php

namespace App\Livewire\Users;

use App\Traits\UserTrait;
use Livewire\Component;

class CallCenterListView extends Component
{
    use UserTrait;
    public $guests;

    public function render()
    {
        $this->guests = $this->user_group('call center');
        return view('livewire.users.call-center-list-view')->layout('layouts.app');
    }
}

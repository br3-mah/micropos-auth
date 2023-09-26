<?php

namespace App\Livewire\Users;

use App\Traits\UserTrait;
use Livewire\Component;

class PaymentProviderListView extends Component
{
    use UserTrait;
    public $guests;

    public function render()
    {
        $this->guests = $this->user_group('payment solution');
        return view('livewire.users.payment-provider-list-view')->layout('layouts.app');
    }
}

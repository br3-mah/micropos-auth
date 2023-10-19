<?php

namespace App\Livewire\Orders;

use App\Traits\UserTrait;
use Livewire\Component;

class MyOrderListView extends Component
{
    use UserTrait;
    public function render()
    {
        if(auth()->user()->type !== 'admin'){
            $this->redirectUser();
        }
        return view('livewire.orders.my-order-list-view');
    }
}

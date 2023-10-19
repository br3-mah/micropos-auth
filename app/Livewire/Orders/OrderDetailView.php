<?php

namespace App\Livewire\Orders;

use App\Traits\UserTrait;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderDetailView extends Component
{
    use UserTrait;
    public $order_view, $order_item_view;
    public $total = 0;
    public function mount($id)
    {
        if(auth()->user()->type !== 'admin'){
            $this->redirectUser();
        }
        // Retrieve products from the second database
        $this->order_view = DB::connection('second_database')
        ->table('orders')
        ->orderBy('created_at', 'desc')
        ->where('id', $id)
        ->get();

        $this->order_item_view = DB::connection('second_database')
        ->table('order_items')
        ->orderBy('created_at', 'desc')
        ->where('order_id', $id)
        ->get();

        // Commit the transaction
        DB::connection('second_database')->commit();
    }
    public function render(){
        foreach ($this->order_item_view as $key => $item) {
            $this->total += (float)$item->price * (int)$item->qty;
        }
        
        return view('livewire.orders.order-detail-view')->layout('layouts.app');
    }
}

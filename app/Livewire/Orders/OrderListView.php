<?php

namespace App\Livewire\Orders;

use App\Traits\UserTrait;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderListView extends Component
{
    use UserTrait;
    public $orders = [];
    public $order_view = [];
    public $order_item_view = [];
    public function render()
    {
        if(auth()->user()->type !== 'admin'){
            $this->redirectUser();
        }
        // Retrieve products from the second database
        $this->orders = DB::connection('second_database')
            ->table('orders')
            ->orderBy('created_at', 'desc')
            ->get();
        // Commit the transaction
        DB::connection('second_database')->commit();
        // Pass the products data to the view
        // return view('livewire.products.product-list-view')->layout('layouts.app');
        return view('livewire.orders.order-list-view')->layout('layouts.app');
    }


}

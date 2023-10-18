<?php

namespace App\Livewire\Orders;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderListView extends Component
{
    public $orders = [];
    public $order_view = [];
    public $order_item_view = [];
    public function render()
    {
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

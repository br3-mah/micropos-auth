<?php

namespace App\Livewire\Products;

use Livewire\Component;

class MyProductListView extends Component
{
    public function render()
    {
        return view('livewire.products.my-product-list-view')->layout('layouts.app');
    }
}

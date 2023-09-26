<?php

namespace App\Livewire\Products;

use Livewire\Component;

class ProductListView extends Component
{
    public function render()
    {
        return view('livewire.products.product-list-view')->layout('layouts.app');
    }
}

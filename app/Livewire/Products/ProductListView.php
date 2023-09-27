<?php

namespace App\Livewire\Products;


use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ProductListView extends Component
{
    public $products = [];

    
    public function render()
    {
        $response = Http::get('http://localhost/ecoAgro/marketplace/api/products');
        dd($response->json());
        // dd($response->json());
        // try 
        //     if ($response->successful()) {
        //         $this->products = $response->json();
        //     } else {
        //         // Handle error response
        //         session()->flash('errorMessage', 'Failed to fetch products.');
        //     }
        // } catch (\Exception $e) {
        //     // Handle the exception
        //     session()->flash('errorMessage', 'Error: ' . $e->getMessage());
        // }
        return view('livewire.products.product-list-view')->layout('layouts.app');
    }
}

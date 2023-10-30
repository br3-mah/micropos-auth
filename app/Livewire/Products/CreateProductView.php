<?php

namespace App\Livewire\Products;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CreateProductView extends Component
{
    public $categories = [];
    public $tags = [];

    
    public function render()
    {
        // Switch to the second database connection
        DB::connection('second_database')->beginTransaction();

        try {
            // Retrieve products from the second database
            $this->categories = DB::connection('second_database')
            ->table('categories')
            ->orderBy('name', 'asc')
            ->get();
            $this->tags = DB::connection('second_database')
            ->table('tags')
            ->orderBy('name', 'asc')
            ->get();
            DB::connection('second_database')->commit();
            
            return view('livewire.products.create-product-view')->layout('layouts.app');

        } catch (\Exception $e) {
            dd($e);
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();

            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());

            return view('livewire.products.create-product-view')->layout('layouts.app');
        }
    }
}

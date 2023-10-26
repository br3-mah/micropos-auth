<?php

namespace App\Livewire\Category;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CategoryListView extends Component
{
    public $categories = [];
    public function render()
    {
        // Switch to the second database connection
        DB::connection('second_database')->beginTransaction();

        try {
            // Retrieve products from the second database
            $this->categories = DB::connection('second_database')
                ->table('categories')
                ->orderBy('created_at', 'desc')
                ->get();
            // Commit the transaction
            DB::connection('second_database')->commit();
            // Pass the products data to the view
            return view('livewire.category.category-list-view')->layout('layouts.app');

        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();

            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());

            return view('livewire.category.category-list-view')->layout('layouts.app');
        }
    }
}

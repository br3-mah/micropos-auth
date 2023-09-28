<?php

namespace App\Livewire\Products;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ProductListView extends Component
{
    public $products = [];

    
    public function render()
    {
        // Switch to the second database connection
        DB::connection('second_database')->beginTransaction();

        try {
            // Retrieve products from the second database
            $this->products = DB::connection('second_database')
                ->table('products')
                ->orderBy('created_at', 'desc')
                ->get();
            // Commit the transaction
            DB::connection('second_database')->commit();
            // Pass the products data to the view
            return view('livewire.products.product-list-view')->layout('layouts.app');

        } catch (\Exception $e) {
            dd($e);
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();

            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());

            return view('livewire.products.product-list-view')->layout('layouts.app');
        }
    }

    public function deleteProduct($id){
        // Switch to the second database connection
        DB::connection('second_database')->beginTransaction();

        try {
            // Find the product by its ID from the second database
            $product = DB::connection('second_database')
                ->table('products')
                ->where('id', $this->productId)
                ->first();

            // Check if the product exists
            if (!$product) {
                // Handle the case where the product doesn't exist (e.g., show an error message)
                Session::flash('errorMessage', 'Product not found.');
            } else {
                // Delete the product
                DB::connection('second_database')
                    ->table('products')
                    ->where('id', $this->productId)
                    ->delete();

                // Commit the transaction
                DB::connection('second_database')->commit();

                // Optionally, you can also flash a success message
                Session::flash('successMessage', 'Product deleted successfully.');
            }
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();

            // Handle the exception
            Session::flash('errorMessage', 'Error: ' . $e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function createProduct(){
        return view('livewire.products.create-prod');
    }

    public function destroyProduct($id)
    {
        // Switch to the second database connection
        DB::connection('second_database')->beginTransaction();
    
        try {
            // Find the product by its ID from the second database
            $product = DB::connection('second_database')
                ->table('products')
                ->where('id', $id)
                ->first();
    
            // Check if the product exists
            if (!$product) {
                // Handle the case where the product doesn't exist (e.g., show an error message)
                session()->flash('errorMessage', 'Product not found.');
                return redirect()->route('products'); // Redirect to the product listing page
            }
    
            // Delete the product
            DB::connection('second_database')
                ->table('products')
                ->where('id', $id)
                ->delete();
    
            // Commit the transaction
            DB::connection('second_database')->commit();
    
            // Optionally, you can also flash a success message
            session()->flash('successMessage', 'Product deleted successfully.');
    
            // Redirect back to the product listing page or another appropriate page
            return redirect()->back();
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();
    
            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());
    
            // Redirect back to the product listing page or another appropriate page
            return redirect()->back();
        }
    }
}

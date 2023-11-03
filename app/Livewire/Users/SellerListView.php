<?php

namespace App\Livewire\Users;

use App\Traits\UserTrait;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SellerListView extends Component
{
    use UserTrait;
    public $sellers;

    public function render()
    {
        DB::connection('second_database')->beginTransaction();

        try {
            // Retrieve products from the second database
            $this->sellers = DB::connection('second_database')
                ->table('users')
                ->orderBy('created_at', 'desc')
                ->get();
            // Commit the transaction
            DB::connection('second_database')->commit();
            // Pass the products data to the view
            return view('livewire.users.seller-list-view')->layout('layouts.app');

        } catch (\Exception $e) {
            dd($e);
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();

            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());

            return view('livewire.users.seller-list-view')->layout('layouts.app');
        }
        
    }
}

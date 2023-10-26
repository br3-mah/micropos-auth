<?php

namespace App\Livewire\Category;

use Livewire\Component;

class CreateCategoryView extends Component
{
    public function render()
    {
        return view('livewire.category.create-category-view')->layout('layouts.app');
    }
}

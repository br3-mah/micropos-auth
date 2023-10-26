<?php

namespace App\Livewire\Tag;

use Livewire\Component;

class CreateTagView extends Component
{
    public function render()
    {
        return view('livewire.tag.create-tag-view')->layout('layouts.app');
    }
}

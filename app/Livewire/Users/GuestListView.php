<?php

namespace App\Livewire\Users;

use App\Repositories\UserRepository;
use App\Traits\UserTrait;
use Livewire\Component;

class GuestListView extends Component
{
    use UserTrait;
    // private $userRepo;
    public $guests;

    // public function __construct()
    // {
         
    //     $this->userRepo = UserRepository::class;
    // }

    public function render()
    {
        $this->guests = $this->user_type('guest');
        return view('livewire.users.guest-list-view')->layout('layouts.app');
    }
}

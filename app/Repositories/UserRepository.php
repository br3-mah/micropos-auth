<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function all()
    {
        return User::all();
    }

    public function group($group)
    {
        return User::where('çustomer_group', $group)->get();
    }

    public function find($id)
    {
        return User::find($id);
    }
    public function create($request)
    {
        
    }

    public function destroy($user)
    {
        // Delete the product
        $user->delete();
    }
}
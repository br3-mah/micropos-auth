<?php
namespace App\Traits;

use App\Models\User;

trait UserTrait
{
    public function all()
    {
        return User::all();
    }

    public function user_group($group)
    {
        return User::where('customer_group', $group)
        ->orderBy('created_at', 'desc')
        ->get();
    }

    public function user_type($type)
    {
        return User::where('type', $type)
        ->orderBy('created_at', 'desc')
        ->get();
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
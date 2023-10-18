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
        return User::with('user_details')->where('customer_group', $group)
        ->orderBy('created_at', 'desc')
        ->get();
    }

    public function user_type($type)
    {
        return User::with('user_details')->where('type', $type)
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


    // Stats
    public function totalGuests(){
        return User::where('type', 'guest')->count();
    }
    public function totalFarmers(){
        return User::where('type', 'farmer')->count();
    }
    public function totalAgronomists(){
        return User::where('type', 'agronomist')->count();
    }
    public function totalUsers(){
        return User::count();
    }
}
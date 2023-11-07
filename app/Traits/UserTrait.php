<?php
namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Redirect;

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

    public function redirectUser(){
        $user = auth()->user();
        $userData = json_encode($user);
        if(auth()->check()){
            switch (auth()->user()->current_destination) {
                case 'marketplace':
                    $destination = 'https://market.ecoagrozm?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
                
                case 'call-center':
                    $destination = 'https://callcenter.ecoagrozm/login?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
                
                case 'call center':
                    $destination = 'https://callcenter.ecoagrozm/login?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
            
                case 'website':
                    $destination = 'https://ecoagrozm.com?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
        
                case 'payment':
                    $destination = 'https://ecoagrozm.com?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
        
                case 'payment solution':
                    $destination = 'https://ecoagrozm.com?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
        
                case 'advisory':
                    $destination = 'https://callcenter.ecoagrozm?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
                            
                default:
                        $destination = 'https://ecoagrozm.com?user=' . urlencode($userData);
                        return Redirect::away($destination);
                break;
            }
        }
    }
}
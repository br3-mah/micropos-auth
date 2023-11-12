<?php

namespace App\Http\Controllers;

use App\Traits\UserTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    use UserTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // important
        // dd('Destination: '.auth()->user()->current_destination);
        $user = auth()->user();
        $userData = json_encode($user);

        // Statistics
        $total_guests = $this->totalGuests();
        $total_agronomists = $this->totalAgronomists();
        $total_farmers = $this->totalFarmers();
        if (auth()->user()->type == 'admin') {
            return view('dashboard',[
                'total_guests' => $total_guests,
                'total_agronomists' => $total_agronomists,
                'total_farmers' => $total_farmers
            ]);
        }
        if(auth()->check()){
            switch (auth()->user()->current_destination) {
                case 'marketplace':
                    $destination = 'https://market.ecoagrozm.com/login?user=' . urlencode($userData);
                    // $destination = 'http://localhost/eco-market/login?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
                
                case 'call-center':
                    
                    // $destination = 'http://localhost/eco-call/login?user=' . urlencode($userData);
                    // $destination = 'https://callcenter.ecoagrozm.com/';
                    $destination = 'https://callcenter.ecoagrozm.com/login?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
                
                case 'call center':
                    
                    // $destination = 'http://localhost/eco-call/login?user=' . urlencode($userData);
                    $destination = 'https://callcenter.ecoagrozm.com/login?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
            
                case 'website':
                    
                    // $destination = 'http://localhost/eco-web?user=' . urlencode($userData);
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
                    // $destination = 'http://localhost/eco-call/login?user=' . urlencode($userData);
                    // $destination = 'https://callcenter.ecoagrozm.com/';
                    $destination = 'https://callcenter.ecoagrozm.com/login?user=' . urlencode($userData);
                    return Redirect::away($destination);
                break;
        
                case 'auth':
                    return view('dashboard',[
                        'total_guests' => $total_guests,
                        'total_agronomists' => $total_agronomists,
                        'total_farmers' => $total_farmers
                    ]);
                break;
                            
                default:
                    if (auth()->user()->type == 'admin') {
                        return view('dashboard',[
                            'total_guests' => $total_guests,
                            'total_agronomists' => $total_agronomists,
                            'total_farmers' => $total_farmers
                        ]);
                    }else{
                        // $destination = 'http://localhost/eco-web?user=' . urlencode($userData);
                        $destination = 'https://ecoagrozm.com?user=' . urlencode($userData);
                        return Redirect::away($destination);
                    }
                break;
            }
        }else{
            return view('dashboard',[
                'total_guests' => $total_guests,
                'total_agronomists' => $total_agronomists,
                'total_farmers' => $total_farmers
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $userData = json_encode($user);
        if(auth()->check()){
            switch (auth()->user()->current_destination) {
                case 'marketplace':
                    $destination = 'http://market.greenwebbtech.com?user=' . urlencode($userData);
                    return Redirect::away($destination);
                    break;
                
                case 'call-center':
                    return Redirect::away('http://website.greenwebbtech.com/');
                    break;
            
                case 'website':
                    $destination = 'http://website.greenwebbtech.com?user=' . urlencode($userData);
                    return Redirect::away($destination);
                    break;
        
                case 'payment':
                    return Redirect::away('http://website.greenwebbtech.com/');
                    break;
        
                case 'advisory':
                    return Redirect::away('http://website.greenwebbtech.com/');
                    break;
        
                case 'auth':
                    
                    return view('dashboard');
                    break;
                            
                default:
                    $destination = 'http://market.greenwebbtech.com?user=' . urlencode($userData);
                    return Redirect::away($destination);
                    break;
            }
        }else{
            return view('dashboard');
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

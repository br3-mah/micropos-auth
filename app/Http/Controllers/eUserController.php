<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\AccountApproved;
use App\Notifications\AccountDisapproved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
class eUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function approve(Request $request){
        try {
            User::where("id", $request->input('user_id'))->update(["is_approved"=> $request->input('new_status')]);
            $user = User::where('email', $request->input('user_email'))->first();
            // Send notification to multiple users
            if($request->input('new_status')){

                Notification::route('mail', $request->input('user_email'))->notify(new AccountApproved($user));
                return redirect()->back()->with('success',    'Account approved successfully');
            }else{
                    
                Notification::route('mail', $request->input('user_email'))->notify(new AccountDisapproved($user));
                return redirect()->back()->with('success',    'Account disapproved successfully');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',    $th->getMessage());
        }
        
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

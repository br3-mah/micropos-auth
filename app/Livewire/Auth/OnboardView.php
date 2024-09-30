<?php

namespace App\Livewire\Auth;

use App\Mail\OTPEmail;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class OnboardView extends Component
{
    public $email;
    protected $rules = [
        'email' => 'required|email|unique:users,email',
    ];

    public function render()
    {
        return view('livewire.auth.onboard-view')->layout('layouts.guest');
    }

    public function sendOtp(){
         // Validate

         $this->validate();

        // Generate a unique OTP code
        $otpCode = rand(10000, 99999); // Generate a 5-digit OTP code

        // Save it in the Database
        $user = User::create([
            'email' => $this->email,
            'otp' => $otpCode, // Store OTP code in the database
            'otp_verified' => 0,
        ]);

        // Dispatch Email
        // if (!empty($input['source'])) {
        //     $user->current_source = $input['source'];
        //     $user->current_destination = $input['purpose'];
        //     $user->save();
        // } else {
        //     $user->current_destination = $input['purpose'];
        //     $user->save();
        // }

        $admin = User::where('id', 1)->first(); 

        // Send welcome email to user and admin notice
        // Mail::to($user->email)->send(new WelcomeEmail($user));
        // Mail::to($admin->email)->send(new WelcomeEmail($user));

        // Send OTP email to the user
        Mail::to($user->email)->send(new OTPEmail($user));
        return redirect()->route('register', [
            'source' => 'origin',
            'destination' => 'd',
        ]);
        
    }

}

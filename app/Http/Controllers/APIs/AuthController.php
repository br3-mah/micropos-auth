<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Mail\OTPEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    

    public function render()
    {
        return view('livewire.auth.onboard-view')->layout('layouts.guest');
    }

    public function sendOtp(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:users,email',
            ]);
    
            // Generate a unique OTP code
            $otpCode = rand(10000, 99999); // Generate a 5-digit OTP code
    
            // Save it in the Database
            $user = User::create([
                'email' => $request->input('email'),
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
    
            // $admin = User::where('id', 1)->first(); 
            // Send welcome email to user and admin notice
            // Mail::to($user->email)->send(new WelcomeEmail($user));
            // Mail::to($admin->email)->send(new WelcomeEmail($user));
    
            // Send OTP email to the user
            Mail::to($user->email)->send(new OTPEmail($user));
            return response()->json(['message' => 'OTP sent successfully!']);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }
    }

    public function reSendOtp(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
            ]);
    
            // Generate a unique OTP code
            $otpCode = rand(10000, 99999); // Generate a 5-digit OTP code
    
            // Save it in the Database
            $user = User::where('email', $request->input('email'))->first();
            $user->otp = $otpCode;
            $user->save();

            // Send OTP email to the user
            Mail::to($user->email)->send(new OTPEmail($user));
            return response()->json(['message' => 'OTP sent successfully to your email '.$request->input('email')]);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }
    }

    public function verify(Request $request){
        // Retrieve the OTP from the request
        $otpCode = $request->input('otp');
        
        // Assuming you have stored the original OTP in the session for verification
        $originalOtp = User::where('email', $request->input('email'))->first()->otp; // Replace with your logic to retrieve the stored OTP

        // Verify the OTP
        if ($otpCode === $originalOtp) {
            // OTP is valid, proceed to the next step
            $user = User::where('email', $request->input('email'))->first();
            $user->otp_verified = 1; // Use the correct column name as needed
            $user->save();
            return response()->json(['result' => 1]);
        } else {
            // OTP is invalid, prevent moving to the next step
            return response()->json(['result' => 0]);
        }
    }


    public function acc_type(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'account_type' => 'required|string',
        ]);
        $user = User::where('email', $request->input('email'))->first();
        $user->is_type = $request->account_type;
        $user->save();
        return response()->json(['result' => 1]); 
    }

    public function save_acc(Request $request)
    {
        try {
            // Validate incoming request
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'tpin' => 'required|string|max:255',
            // 'bizname' => 'required|string|max:255',
            'email' => 'required', // Adjust regex or max length as needed
            'phone' => 'required', // Adjust regex or max length as needed
            'date' => 'required', // DOB day
            'month' => 'required', // DOB month
            'year' => 'required', // DOB year
            'password' => 'required|string|min:8',
            'gender' => 'required|string',
        ]);
    
        // Combine the date of birth from day, month, and year
        $dob = $validatedData['year'] . '-' . str_pad($validatedData['month'], 2, '0', STR_PAD_LEFT) . '-' . str_pad($validatedData['date'], 2, '0', STR_PAD_LEFT);
            
        // Find user by email
        $user = User::where('email', $validatedData['email'])->first();

        // If user exists, update the fields
        if ($user) {
            $user->update([
                'fname' => $validatedData['fname'],
                'lname' => $validatedData['lname'],
                'tpin' => $validatedData['tpin'],
                // 'bizname' => $validatedData['bizname'],
                'phone' => $validatedData['phone'],
                'dob' => $dob,
                'type' => $request->input('type', $user->type), // Keep current type if not provided
                'sex' => $validatedData['gender'],
            ]);

            // Update password if provided
            if ($request->filled('password')) {
                $user->update([
                    'password' => Hash::make($validatedData['password']),
                    'global_secret_word' => $validatedData['password'], // Consider encrypting or removing this
                ]);
            }
        }
    
        return response()->json(['result' => 1, 'user_id' => $user->id]);
        } catch (\Throwable $th) {
            return response()->json(['result' => 0, 'message' => $th->getMessage()]);
        }
    }
    
}

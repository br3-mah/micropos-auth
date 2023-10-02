<?php

namespace App\Http\Controllers\Api\Auth;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class RegisterController extends Controller
{
    use PasswordValidationRules;
    public function register(Request $request)
    {   
        
        try {
            $input = $request->toArray();
            // dd($input);
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                // 'password' => $this->passwordRules(),
                // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();
    
            $user =  User::create([
                        'name' => $input['name'],
                        'email' => $input['email'],
                        'customer_group' => $input['service'],
                        'type' => $input['user_type'],
                        'global_secret_word' => $input['password'],
                        'password' => Hash::make($input['password']),
                    ]);
            // Optionally, you can generate an API token here for the registered user
            $token = $user->createToken('api-token')->plainTextToken;

            $details = $this->registerDetails($input, $user);

            return response()->json([
                'message'=>'User registered successfully',
                'data'=>$user,
                'token'=> $token,
                'service' => $details->service
            ]);

        } catch (\Throwable $th) {
            dd($th);
            // return response()->json(['msessage' => 'User registrtion failed', 'data'=>$th, 'service'=>[], 'token'=>''], 500);
        }
    }


    public function registerDetails($data, $user){
        $result = UserDetail::create([
            'business_type' => $data['businessType'],
            'fullname' => $data['fullname'],
            'phone_number' => $data['phoneNumber'],
            'city' => $data['city'],
            'province' => $data['province'],
            'age' => $data['dob'],
            'sex' => $data['sex'],
            // 'languages' => $data['languages'],
            // 'employement' => $data['employment'],
            'service' => $data['purpose'],
            'user_id' => $user->id,
        ]);
        return $result;
    }


}

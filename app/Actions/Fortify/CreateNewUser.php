<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        
        dd($input);
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'email_verified_at' => now(),
                    'customer_group' => 'guest', //replace with og
                    'type' => 'guest', //replace with og
                    'status' => true,
                    'password' => Hash::make($input['password']),
                    'global_secret_word' => $input['password'],
                ]);

        if (!empty($input['destination'])) {
            $user->current_source = $input['source'];
            $user->current_destination = $input['destination'];
            $user->save();
        }
              
        
        Mail::to($user->email)->send(new WelcomeEmail($user));
        return $user;
    }

}

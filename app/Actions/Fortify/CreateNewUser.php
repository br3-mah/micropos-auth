<?php

namespace App\Actions\Fortify;

use App\Mail\BPORequest;
use App\Mail\BPOWelcome;
use App\Mail\SellerRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Models\BPO;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserFile;
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
        
    //    try {

        //  dd($input['is_farmer'] ==);
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
                    'customer_group' => $input['purpose'], //replace with og
                    'type' => $input['type'] ?? 'guest', //replace with og
                    'status' => true,
                    'password' => Hash::make($input['password']),
                    'global_secret_word' => $input['password'],

                    'sex' => $input['sex'],
                    'occupation' => $input['occupation'],
                    'is_farmer' => $input['is_farmer'] == 'on' ? 1 : 0,
                ]);

        $this->registerDetails($input, $user);
        // Handle file uploads 
        //::Bad Bug:: Unable to save all other multiple
        // dd(array_key_exists('files', $input));
        if (array_key_exists('files', $input)) {
            $file = $input['files'];
            // Store the file in the storage/app/public directory (you can change the path as needed)
            $path = $file->store('public');
            
            // Save the file path in the database if you have a table for file records
            UserFile::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
                'user_id' => $user->id
            ]);
        }
        if (array_key_exists('files1', $input) ) {
                $file1 = $input['files1'];
                // Store the file in the storage/app/public directory (you can change the path as needed)
                $path = $file1->store('public');
                
                // Save the file path in the database if you have a table for file records
                UserFile::create([
                    'name' => $file1->getClientOriginalName(),
                    'path' => $path,
                    'user_id' => $user->id
                ]);
        }
        if (array_key_exists('files2', $input) ) {
                $file2 = $input['files2'];
                // Store the file in the storage/app/public directory (you can change the path as needed)
                $path = $file2->store('public');
                
                // Save the file path in the database if you have a table for file records
                UserFile::create([
                    'name' => $file2->getClientOriginalName(),
                    'path' => $path,
                    'user_id' => $user->id
                ]);
        }
        if (array_key_exists('files3', $input) ) {
                $file3 = $input['files3'];
                // Store the file in the storage/app/public directory (you can change the path as needed)
                $path = $file3->store('public');
                
                // Save the file path in the database if you have a table for file records
                UserFile::create([
                    'name' => $file3->getClientOriginalName(),
                    'path' => $path,
                    'user_id' => $user->id
                ]);
        }
        if (array_key_exists('files4', $input) ) {
                $file4 = $input['files4'];
                // Store the file in the storage/app/public directory (you can change the path as needed)
                $path = $file4->store('public');
                
                // Save the file path in the database if you have a table for file records
                UserFile::create([
                    'name' => $file4->getClientOriginalName(),
                    'path' => $path,
                    'user_id' => $user->id
                ]);
        }

        if (!empty($input['source'])) {
            $user->current_source = $input['source'];
            $user->current_destination = $input['purpose'];
            $user->save();
        }else{
            $user->current_destination = $input['purpose'];
            $user->save();
        }
              
        $admin = User::where('id', 1)->first(); 

        // Send welcome email to user
        // Mail::to($user->email)->send(new WelcomeEmail($user));
        // Mail::to($admin->email)->send(new WelcomeEmail($user));

        
        if($input['type'] == 'seller'){
            $this->registerSeller($user, $input);
        }
        if($input['type'] == 'bpo'){
            $this->registerBPO($user, $input);
        }

        return $user;
    //    } catch (\Throwable $th) {
    //     // return redirect()->back();
    //     dd($th);
    //    }
    }

    
    public function registerDetails($data, $user){
        $result = UserDetail::create([
            'business_type' => $data['purpose'],
            'fullname' => $data['name'],
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


    public function registerSeller($user, $data){
        
        $user->is_type = $data['type'];
        $user->seller_name = $data['seller_name'];
        $user->seller_address = $data['seller_address'];
        $user->seller_city = $data['seller_city'];
        $user->seller_phone = $data['seller_phone'];
        $user->save();

        // Enter Send email to admin of new seller
        Mail::to('info@ecogrozambia.com')->send(new SellerRequest($user));
        
    }


    public function registerBPO($user, $data){
        try {
            $bpo = new BPO();
            $bpo->company_name = $data['c_name'];
            $bpo->c_address = $data['c_address'];
            $bpo->c_phone = $data['c_phone'];
            $bpo->c_email = $data['c_email'];
            $bpo->c_city = $data['c_city'];
            $bpo->c_country = $data['c_country'];
            $bpo->user_id = $user->id;
            $bpo->save();
    
            $dt = User::with('bpo')->where('id', $user->id)->first();
            // Enter Send email to admin of new seller
            Mail::to($dt['email'])->send(new BPOWelcome($data));
            Mail::to('info@ecogrozambia.com')->send(new BPORequest($data));
            return true;
        } catch (\Throwable $th) {
            return true;
        }
        
    }

}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'global_key',
        'fname',
        'lname',
        'mname',
        'email',
        'password',
        'current_source',
        'current_destination',
        'global_secret_word',
        'customer_group', //advisory, call center, payment solution, marketplace, admin, none
        'type', //admin, agronomist, bpo
        'sex',
        'occupation',
        'status',
        'is_approved', //seller_approval
        'is_bpo_approved', //bpo approval
        "is_type", //personal or company
        "is_farmer",
        "seller_name",
        "seller_address",
        "seller_address2",
        "seller_address3",
        "seller_size",
        "seller_city",
        "seller_country",
        "seller_phone",
        "seller_phone2",
        "seller_phone3",
        'otp',
        'otp_verified',
        'tpin' //user TPIN
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];


    // Booting
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Generate a unique key using UUID
            $user->global_key = (string) Uuid::uuid4();
        });
    }



    // Relationships
    public function user_details(){
        return $this->hasMany(UserDetail::class);
    }
    // Relationships
    public function user_files(){
        return $this->hasMany(UserFile::class);
    }
    // Relationships
    public function bpo(){
        return $this->hasMany(BPO::class);
    }
    
    public static function details($user_id){
        return UserDetail::where('user_id', $user_id)->first();
    }
}

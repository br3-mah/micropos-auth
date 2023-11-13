<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BPO extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'c_email',
        'c_phone',
        'c_address',
        'logo',
        'user_id',
        'xcode',
        'pin',
        'c_phone2',
        'c_slogan',
        'c_city',
        'c_country'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

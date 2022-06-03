<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorCustomer extends Model
{
    use HasFactory;

    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'password',
        'address',
        'bizname',
        'biztype',
        'bizdescrp',
        'photo',
        'role'
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

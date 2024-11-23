<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class freelancer extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname','lname','email','password','country'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

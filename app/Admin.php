<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    // use SoftDeletes;
    use Notifiable;

    // protected $dates = ['deleted_at'];

// The authentication guard for admin
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'deleted_at'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

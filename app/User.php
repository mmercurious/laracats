<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Middleware\CheckAdminStatus;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {         
        return $this->belongsToMany(Role::class);     
    }

    public function cats() {
        return $this->hasMany(Cat::class, 'creator');
    }

    public function isAdmin() {
        return $this->roles->pluck('name')->contains('admin');
    }
}

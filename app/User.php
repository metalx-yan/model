<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

<<<<<<< HEAD
     public function role()
    {
        return $this->belongsTo(Role::class);
=======
    public function role()
    {
        return $this->hasMany(Role::class);
>>>>>>> fca5c238a93b026788a29208bad70ef3df7ef5ee
    }
}

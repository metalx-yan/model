<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD

class User extends Authenticatable
{
=======
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
>>>>>>> bd64c36f1600dca200cbffa95d664555d61f4ab7
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

<<<<<<< HEAD
     public function role()
    {
        return $this->belongsTo(Role::class);
=======
<<<<<<< HEAD
    public function role()
    {
        return $this->belongsTo(Role::class);
=======
    public function ticket()
    {
        return $this->hasMany('App\Ticket');
>>>>>>> a8c56e09facff8c567d2a575a6751f6e750a52ea
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
    }
=======
>>>>>>> bd64c36f1600dca200cbffa95d664555d61f4ab7
}

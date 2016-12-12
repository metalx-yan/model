<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
    	return $this->hasMany(User::class);
    }
=======
use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    //
>>>>>>> bd64c36f1600dca200cbffa95d664555d61f4ab7
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
<<<<<<< HEAD
    	return $this->hasMany(User::class);
=======
    	return $this->belongsTo(User::class);
>>>>>>> fca5c238a93b026788a29208bad70ef3df7ef5ee
    }
}

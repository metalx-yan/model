<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $table = 'registrasi';

    public $cast = [
    	'valid' => 'boolean',
    ];

    public $fillable = [
    	'token',
    	'valid',
    	'email',
    ];

    public $hidden = [
    	'token',
    	'valid',
    	'email',
    ];
}

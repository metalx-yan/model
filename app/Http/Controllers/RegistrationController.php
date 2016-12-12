<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LembagaX\Traits\RegistrasiDuaTahap as Registrasi;
use Validator;

class RegistrationController extends Controller
{
    protected $targetEmail;

    use Registrasi;

    public function getEmailRegistrationFrom()
    {
    	return view('registrasi.formEmail');
    }

    public function validateEmailRegistration(Request $req)
    {
      $validator = Validator::make($req->all(), [
          'email' => 'required|unique:users,email|max:255',
      ]);

      if ($validator->fails()) {
        $this->failHandler('Mohon masukan Email Anda');
      } else {
        $this->successHandler($req->email);
      }

      return $this->getEmailRegistrationFrom();
    }

    public function tokenCheck($token)
    {
      $this->tokenExtractor($token);

      if ($this->pass == true) {
        return $this->getFromRegistration($token);
      } else {
        $this->failHandler('Token Anda sudah tidak berlaku');
        return $this->getEmailRegistrationFrom();
      }
    }
}

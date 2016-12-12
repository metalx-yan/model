<?php

namespace App\LembagaX\Traits;

use App\Registrasi as Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrasiTahapSatu as Email;

trait RegistrasiDuaTahap
{

	protected $targetEmail;
	protected $registration;
	protected $pass;
	protected $token;

  protected function failHandler($message = null)
  {
  	return flash($message, 'danger');
  }

  protected function successHandler($targetEmail = null)
  {
  	$this->targetEmail = $targetEmail;
  	$tokenChecker = Model::where('email', '=', $this->targetEmail)->first();
  	$this->token = str_random(100);
  	if ($tokenChecker != null) {
  		return $this->failHandler('Token dengan Email tersebut sudah ada, mohon cek email Anda');
  	}
  	return $this->sendEmailToTarget();
  }

	protected function sendEmailToTarget()
	{
  	Mail::to($this->targetEmail)->send(new Email($this->token));
    return $this->writingRegistrationToken();
	}

	protected function writingRegistrationToken()
	{
		Model::create([
			'email' => $this->targetEmail,
			'token' => $this->token,
		]);
  	return flash('Token Registrasi telah di kirim di email Anda', 'success');
	}

	protected function tokenExtractor($token)
	{
		$get = Model::where('token', '=', $token);
		$isValid = $get->where('valid','=','1')->first();
		$isExist = $get->where('valid','=','0')->first();

		if ($isValid != null) {
			$this->registration = $isValid;
		} else {
	  	return $this->pass = false;
		}
		return $this->tokenFlusher();
	}

	protected function tokenFlusher()
	{
		$this->registration->update([
				'valid' => 0
			]);
		return $this->pass = true;
	}

	protected function getFromRegistration($token)
	{
		$token = $token;
		return view('auth.register', compact('token'));
	}
}
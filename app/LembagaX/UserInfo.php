<?php 

/**
* UserInfo
* Author LembagaX
* lembagax@gmail.com
* Free to use, contact me for issue
*/

namespace App\LembagaX;

use Auth;

class UserInfo
{

	protected $userName;
	protected $userMail;

	function __construct()
	{
		$this->userName = Auth::user()->name;
		$this->userEmail = Auth::user()->email;
	}

	public function getUserEmail()
	{
		return $this->userEmail;
	}
	public function getUserName()
	{
		return $this->userName;
	}

}
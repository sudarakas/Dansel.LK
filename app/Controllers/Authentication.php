<?php namespace App\Controllers;

class Authentication extends BaseController
{
	public function showLoginPage()
	{
		return view('Authentication/my-account');
	}

	public function showRegistrationPage(){
		return view('test/test');
	}

	//--------------------------------------------------------------------

}

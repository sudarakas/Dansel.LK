<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function home(){
		return view('test/test');
	}

	//--------------------------------------------------------------------

}

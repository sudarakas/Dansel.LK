<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	
		
		$model = new \App\Models\DanselModel();
		$dansela = $model->orderBy('id', 'DESC')->limit(5)->findAll();
		return view('index',['data'=>$dansela]);
	}

	//--------------------------------------------------------------------

}

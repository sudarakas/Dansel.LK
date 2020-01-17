<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	
		
		// $db  = \Config\Database::connect();
        // $dansel = $db->table('dansels')->where('id', $id)->get();
        // $dansel=$dansel->limit(10)->getResult();
		// return view('Dansel/view',);
		
		$model = new \App\Models\DanselModel();
		$dansela = $model->orderBy('id', 'DESC')->limit(5)->findAll();
		//print_r($dansela);
		return view('index',['data'=>$dansela]);
	}

	//--------------------------------------------------------------------

}

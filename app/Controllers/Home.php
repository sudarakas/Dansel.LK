<?php namespace App\Controllers;

class Home extends BaseController {
    public function index() {

        $model = new \App\Models\DanselModel();
        $userModel = new \App\Models\AuthenticationModel();
        $dansela = $model->orderBy( 'id', 'DESC' )->limit( 5 )->findAll();
        $danselaTop = $model->orderBy( 'time', 'DESC' )->limit(3)->findAll();
        $users = $userModel->orderBy( 'id', 'DESC' )->limit( 5 )->findAll();
        return view( 'index', ['data'=>$dansela, 'top'=>$danselaTop, 'user'=>$users] );
    }

    //--------------------------------------------------------------------

}

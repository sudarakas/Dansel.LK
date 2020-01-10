<?php namespace App\Controllers;

class Dansel extends BaseController
{
    public function showAddPage()
    {
        return view('Dansel/add');
    }

    public function showEditPage($id)
    {
        return view('Dansel/edit');
    }

    //--------------------------------------------------------------------

}

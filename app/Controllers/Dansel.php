<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DanselModel as DanselModel;

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

    public function storeDansel()
    {
        helper('form');
        $dansel = new DanselModel();

        helper(['form', 'url']);

        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            echo view('Dansel/add', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('Dansel/add');
        }

        $prefix = $this->request;
        echo $prefix->getVar('title');
    }

    //--------------------------------------------------------------------

}

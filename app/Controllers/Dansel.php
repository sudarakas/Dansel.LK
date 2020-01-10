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
            'address' => 'required|min_length[3]|max_length[1000]',
            'city' => 'required|min_length[3]|max_length[255]',
            'location_lat' => 'required',
            'location_lng' => 'required',
            'opening_date' => 'required|regex_match[/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/]',
            'poya_date' => 'required|is_natural_no_zero',
            'opening_time' => 'required|regex_match[/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]',
            'end_time' => 'required|regex_match[/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]',
            'time' => 'required|is_natural_no_zero',
            'category' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[30]|max_length[5000]',
            'organizing_team' => 'required|min_length[3]|max_length[100]',
            'organizing_number' => 'required|min_length[10]|max_length[20]',
        ])) {
            return view('Dansel/add', [
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

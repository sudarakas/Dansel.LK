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
            'city' => 'required',
            'location_lat' => 'required',
            'location_lng' => 'required',
            'opening_date' => 'required|regex_match[/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/]',
            'poya_date' => 'required|is_natural_no_zero',
            'opening_time' => 'required|regex_match[/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]',
            'end_time' => 'required|regex_match[/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]',
            'time' => 'required|is_natural_no_zero',
            'category' => 'required',
            'description' => 'required|min_length[30]|max_length[5000]',
            'organizing_team' => 'required|min_length[3]|max_length[100]',
            'organizing_number' => 'required|min_length[10]|max_length[20]',
            'banner' => ['uploaded[banner]','mime_in[banner,image/jpg,image/jpeg,image/gif,image/png]','max_size[banner,4096]',],
        ])) {
            return view('Dansel/add', [
                'validation' => $this->validator,
            ]);
        } else {

            $file = $this->request->getFile('banner');
            $randomImageName = $file->getRandomName();

            $dansel->save([
                'name' => $this->request->getVar('title'),
                'address' => $this->request->getVar('address'),
                'city' => $this->request->getVar('city'),
                'location_lat' => $this->request->getVar('location_lat'),
                'location_lng' => $this->request->getVar('location_lng'),
                'opening_date' => $this->request->getVar('opening_date'),
                'poya_date' => $this->request->getVar('poya_date'),
                'opening_time' => $this->request->getVar('opening_time'),
                'end_time' => $this->request->getVar('end_time'),
                'time' => $this->request->getVar('time'),
                'category' => $this->request->getVar('category'),
                'description' => $this->request->getVar('description'),
                'organizing_team' => $this->request->getVar('organizing_team'),
                'organizing_number' => $this->request->getVar('organizing_number'),
                'image' => $randomImageName,
            ]);

            //store file in writable->uploads->images
            $file->store('images', $randomImageName);
            
            return redirect()->to('/');

        }
    }

    public function showViewPage($id)
    {
        echo $id;

    }

    public function deleteDansel($id)
    {
        $db  = \Config\Database::connect();
        $dansel = $db->table('dansels');
        $dansel->where('id', $id);
        $dansel->delete();
    }

    //--------------------------------------------------------------------

}

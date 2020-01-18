<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DanselModel as DanselModel;

class Dansel extends BaseController
{
    public function showAddPage()
    {
        $session = session()->start();
        if(isset($_SESSION['id'])){
            return view('Dansel/add');
        }else{
            return view('Authentication/login');
        }
        
    }

    public function showEditPage($id)
    {
        
        $model = new \App\Models\DanselModel();
        $dansela = $model->find($id);
        return view('Dansel/edit',['data'=>$dansela]);
        
    }

    public function storeDansel()
    {
        helper(['form', 'url']);
        helper('alerts');
        $dansel = new DanselModel();

        $session = session()->start();
  
        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'address' => 'required|min_length[3]|max_length[1000]',
            'city' => 'required',
            'location_lat' => 'required',
            'location_lng' => 'required',
            'opening_date' => 'required|regex_match[/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/]',
            'poya_date' => 'required|min_length[3]|max_length[255]',
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

            //return redirect()->back()->withInput();
        } else {

            $file = $this->request->getFile('banner');
            $randomImageName = $file->getRandomName();
        
            $dansel->save([
                'title' => $this->request->getVar('title'),
                'user_id' => $this->request->getVar('user_id'),
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
            //$file->move(base_url('uploads/'), $randomImageName);
    
            alert('success', "Your dansela has been successfully added!");
            return redirect()->to('/');

        }
    }

    public function updateDansel()
    {
        helper(['form', 'url']);
        helper('alerts');

        $model = new \App\Models\DanselModel();
        $danelId = $this->request->getVar('id');

  
        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'address' => 'required|min_length[3]|max_length[1000]',
            'city' => 'required',
            'location_lat' => 'required',
            'location_lng' => 'required',
            'opening_date' => 'required|regex_match[/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/]',
            'poya_date' => 'required|min_length[3]|max_length[255]',
            'opening_time' => 'required|regex_match[/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]',
            'end_time' => 'required|regex_match[/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/]',
            'time' => 'required|is_natural_no_zero',
            'category' => 'required',
            'description' => 'required|min_length[30]|max_length[5000]',
            'organizing_team' => 'required|min_length[3]|max_length[100]',
            'organizing_number' => 'required|min_length[10]|max_length[20]',
            'banner' => ['uploaded[banner]','mime_in[banner,image/jpg,image/jpeg,image/gif,image/png]','max_size[banner,4096]',],
        ])) {
            return view('Dansel/edit', [
                'validation' => $this->validator,
            ]);

            //return redirect()->back()->withInput();
        } else {

            $file = $this->request->getFile('banner');
            $randomImageName = $file->getRandomName();

            $data = [
                'title' => $this->request->getVar('title'),
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
            ];

            //store file in writable->uploads->images
            $file->store('images', $randomImageName);
            //$file->move(base_url('uploads/'), $randomImageName);

            $model->update($danelId, $data);
    
            alert('success', "Your dansela has been successfully updated!");
            return redirect()->to('/');
        }
        
    }

    public function showViewPage($id)
    {
        
        // $db  = \Config\Database::connect();
        // $dansel = $db->table('dansels')->where('id', $id)->get();
        // $dansel=$dansel->getResult();
        // return view('Dansel/view',['data'=>$dansel]);
        
        //Using Model
        $model = new \App\Models\DanselModel();
        $dansela = $model->find($id);
        return view('Dansel/view',['data'=>$dansela]);

    }

    public function viewAllDansel()
    {
        
        $model = new \App\Models\DanselModel();
        $data = [
            'dansels' => $model->paginate(5),
            'pager' => $model->pager
        ];
        
        return view('Dansel/all', $data);
        
    }

    public function searchDansel()
    {

        $db = \Config\Database::connect();
        $builder = $db->table('dansels');
        $users = $builder->like('title', $this->request->getVar('search'))->orLike('poya_date', $this->request->getVar('search'))->get();

        return dd($users);

    }

    public function deleteDansel($id)
    {
        helper('alerts');

        $db  = \Config\Database::connect();
        $dansel = $db->table('dansels');
        $dansel->where('id', $id);
        $dansel->delete();

        alert('danger', "Your dansela has been successfully deleted!");
        return redirect()->to('/');

    }

    //--------------------------------------------------------------------

}

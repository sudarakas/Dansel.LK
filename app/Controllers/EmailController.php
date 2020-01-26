<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\EmailModel as EmailModel;

class EmailController extends BaseController
{
    public function sendEmail()
    {
        helper(['form', 'url']);
        helper('alerts');
        $message = new EmailModel();

        if (!$this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|min_length[3]|max_length[1000]',
            'message' => 'required|min_length[3]|max_length[1000]',
            
        ])) {
            return view('/', [
                'validation' => $this->validator,
            ]);
        } else {

            $message->save([
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'message' => $this->request->getVar('message'),
            ]);
            $email = \Config\Services::email();

            $email->setFrom('def70ad2c0-b8e5c5@inbox.mailtrap.io', 'Dansel.LK');
            $email->setTo($this->request->getVar('email'));

            $email->setSubject('Dansal.lk');
            $email->setMessage($this->request->getVar('message'));

            $email->send();
            alert('success', "Thank you for your message");
            return redirect()->to('/');
        }
    }


}

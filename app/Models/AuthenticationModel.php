<?php namespace App\Models;

use CodeIgniter\Model;

class AuthenticationModel extends Model
{

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['first_name', 'last_name', 'phone_no', 'email', 'password'];

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function login($email, $password){
        $data = array(
            'email' => $email,
            'password' => $password
        );

        $auth = new AuthenticationModel();
        $db  = \Config\Database::connect();
        $query = $db->table('users')
                ->where('email',$email)
                ->where('password', $password);


        if($query == 1){
            $result =$auth->result_array();
            return $result;
        }
        else{
            return false;
        }
    }
   
}
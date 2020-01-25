<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AuthenticationModel as AuthenticationModel;

class Authentication extends BaseController
 {
    public function showLoginPage()
 {
        return view( 'Authentication/login' );
    }

    public function showRegistrationPage()
 {
        return view( 'Authentication/registration' );
    }

    public function showUserprofilePage()
 {
        $session = \Config\Services::session($config);
        $userModel = new \App\Models\AuthenticationModel();

        $user = $userModel->find($session->get('id'));
        return view( 'Authentication/profile',['data' => $user]);
    }

    public function showDashboardPage()
    {
        $model = new \App\Models\DanselModel();
		$session = \Config\Services::session($config);
		$data = [
			'dansels' => $model->where('user_id', $session->get('id'))->findAll()
		];
        return view('Authentication/dashboard',$data);
    }

    public function post_login()
 {

        helper( 'form' );
        helper( 'alerts' );
        $auth = new AuthenticationModel();

        helper( ['form', 'url'] );
        //validate inputs
        if ( !$this->validate( [
            'email'        => 'required|valid_email',
            'password'     => 'required',
            //'pass_confirm' => 'required|matches[password]',

        ] ) ) {
            return view( 'Authentication/login', [
                'validation' => $this->validator,
            ] );
        } else {

            $email = $this->request->getVar( 'email' );
            $password = $this->request->getVar( 'password' );
            //Encrypt the password
            $encrypted_password =  md5( $this->request->getVar( 'password' ) );

            $db  = \Config\Database::connect();
            $user = $db->table( 'users' )
            ->where( 'email', $email )
            ->where( 'password', $encrypted_password )
            ->get();

            $user = $user->getResult();

            if ( count( $user ) == 1 ) {

                //start the session
                helper( 'session' );
                $session = \Config\Services::session( $config );
                $session = session();
                $session_data = [
                    'id' => $user[0]->id
                ];
                $session->set( $session_data );
                if ( isset( $_SESSION['id'] ) ) {
                    $session = session()->start();
                    return redirect()->to( '/my-account/dashboard' );
                } else {
                    alert( 'warning', 'Something went wrong!' );
                    return redirect()->back( '/my-account/login' );
                }
            } else {
                alert( 'warning', 'Invalid email or password' );
                return redirect()->to( '/my-account/login' );
            }
        }
    }

    public function post_register()
 {
        helper( 'form' );
        helper( 'alerts' );
        helper( ['form', 'url'] );
        $Auth = new AuthenticationModel();
        //validate inputs
        if ( !$this->validate( [
            'email'        => 'required|valid_email|is_unique[users.email]',
            'password'     => 'required',
            'confirm_password' => 'required|matches[password]',

        ] ) ) {
            return view( 'Authentication/registration', [
                'validation' => $this->validator,
            ] );
        } else {

            $Auth->save( [
                'email' => $this->request->getVar( 'email' ),
                'password' => md5( $this->request->getVar( 'password' ) ),
                'pass_confirm' => $this->request->getVar( 'confirm_password' ),

            ] );

            //alert( 'success', 'You are successfully logging!' );
            return view( 'Authentication/login' );

        }
    }

    public function editProfile()
 {
    helper('alerts');
    helper(['form', 'url']);

    $session = \Config\Services::session($config);
	$userModel = new \App\Models\AuthenticationModel();

    $userId = $this->request->getVar('id');

    if($userId == $session->get('id')){
        if (!$this->validate([
            'first_name' => 'required|min_length[3]|max_length[255]',
            'last_name'  => 'required|min_length[3]|max_length[255]',
            'phone_no'   => 'required',
        ])) {
            return view('Authentication/profile', [
                'validation' => $this->validator,
            ]);
        }else {
            $data = [
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'phone_no' => $this->request->getVar('phone_no'),
            ];    
            $userModel->update($userId, $data);

            alert('success', "Your user account has been successfully updated!");
            return redirect()->to('/my-account/dashboard');
        }
    }else{
        alert('warning', "Permission Denied!");
            return view('Authentication/dashboard');
    }
            

        
    }

    public function logout() {
        helper( 'session' );
        $session = session();
        $session->destroy();
        return redirect()->to( '/' );
    }

    public function dashboard() {
        if ( empty( $this->user_id ) ) {
            return redirect()->to( '/' );
        }

        $this->load->view( 'Authentication/dashboard' );
    }

    //--------------------------------------------------------------------

}

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
        return view( 'Authentication/profile' );
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
                    return view( 'Authentication/dashboard' );
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

    public function editProfile( $id )
 {

        if ( isset( $_SESSION['id'] ) ) {
            helper( 'form' );
            helper( 'alerts' );
            helper( ['form', 'url'] );
            $auth = new AuthenticationModel();

            if ( !$this->validate( [
                'fname'        => 'required',
                'lname'     => 'required',
                'province' => 'required',
                'district'        => 'required',
                'phone'     => 'required',
                'username' => 'required',

            ] ) ) {
                return view( 'Authentication/profile', [
                    'validation' => $this->validator,
                ] );
            } else {
                $data = [
                    $this->request->getVar( 'fname' ),
                    $this->request->getVar( 'lname' ),
                    $this->request->getVar( 'province' ),
                    $this->request->getVar( 'district' ),
                    $this->request->getVar( 'phone' ),
                    $this->request->getVar( 'username' ),
                ];

                $db  = \Config\Database::connect();
                $auth = $db->update( 'users', $data )->where( 'id', $id )->get();
                // $dansel = $dansel->getResult();
                return view( 'Authentication/dashboard' );
            }
        } else {
            return redirect()->to( '/' );
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

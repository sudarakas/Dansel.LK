<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class SessionCheck implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = \Config\Services::session($config);
        if (!$session->get('id')) {
            return redirect('login');
        }
    }
    
    //--------------------------------------------------------------------
    
    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}
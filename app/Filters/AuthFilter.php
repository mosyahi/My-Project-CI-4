<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('auth')) {
            return redirect()->to('/')->with('error', 'Anda belum login.');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Next...
    }
}
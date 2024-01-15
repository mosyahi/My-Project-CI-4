<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->has('auth')) {
            return redirect()->to('/')->with('error', 'Silahkan login terlebih dahulu!');
        }
        $userRole = session()->get('role');
        $uri = service('uri');
        $requestedPage = $uri->getSegment(1);
        $allowedPagesWithoutRoleCheck = ['logout'];
        $allowedPages = [
            'Admin' => ['admin', 'admin/dashboard'],
            'User' => ['user', 'user/dashboard'],
        ];

        if (!isset($userRole) || (!in_array($requestedPage, $allowedPagesWithoutRoleCheck) && !in_array($requestedPage, $allowedPages[$userRole]))) {
            $userRole = strtolower($userRole);
            return redirect()->to($userRole . '/dashboard')->with('error', 'Anda tidak diizinkan masuk.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Next...
    }
}
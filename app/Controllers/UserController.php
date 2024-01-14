<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AuthModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new AuthModel();
    }

    public function index(): string
    {
        $users = $this->userModel->findAll();

        $data = [
            'title' => 'Dashboard',
            'active' => 'users',
            'users' => $users
        ];

        return view('pages/admin/data-users', $data);
    }
}

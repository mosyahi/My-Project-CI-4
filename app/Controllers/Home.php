<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/admin/index', ['title' => 'Dashboard', 'active' => 'dashboard']);
    }

    public function user(): string
    {
        return view('pages/user/index', ['title' => 'Dashboard', 'active' => 'dashboard']);
    }
}

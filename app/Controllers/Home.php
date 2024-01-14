<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/admin/index', ['title' => 'Dashboard', 'active' => 'dashboard']);
    }
}

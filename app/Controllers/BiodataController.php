<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PelatihanModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\BiodataModel;

class BiodataController extends BaseController
{
    protected $pelatihanModel;
    protected $pekerjaanModel;
    protected $pendidikanModel;
    protected $biodataModel;

    public function __construct()
    {
        $this->pelatihanModel = new PelatihanModel();
        $this->pekerjaanModel = new PekerjaanModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->biodataModel = new BiodataModel();
    }

    public function index(): string
    {
        // $pelatihan = $this->pelatihanModel->findAll();
        // $pekerjaan = $this->pekerjaanModel->findAll();
        // $pendidikan = $this->pendidikanModel->findAll();
        $biodata = $this->biodataModel->findAll();

        $data = [
            'title' => 'Biodata Pelamar',
            'active' => 'biodata',
            'biodata' => $biodata
        ];

        return view('pages/admin/biodata/index', $data);
    }

    public function new(): string
    {
        $data = [
            'title' => 'Form Biodata Pelamar',
            'active' => 'biodata'
        ];

        return view('pages/admin/biodata/add', $data);
    }
}

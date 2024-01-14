<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PelatihanModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\BiodataModel;
use App\Models\AuthModel;

class BiodataController extends BaseController
{
    protected $pelatihanModel;
    protected $pekerjaanModel;
    protected $pendidikanModel;
    protected $biodataModel;
    protected $userModel;

    public function __construct()
    {
        $this->pelatihanModel = new PelatihanModel();
        $this->pekerjaanModel = new PekerjaanModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->biodataModel = new BiodataModel();
        $this->userModel = new AuthModel();
    }

    public function index(): string
    {
        $userRole = session()->get('role');
        $user_id = session()->get('id_user');

        switch ($userRole) {
            case 'Admin':
            
            $biodata = $this->biodataModel->findAll();

            $data = [
                'title' => 'Biodata Pelamar',
                'active' => 'biodata',
                'biodata' => $biodata
            ];

            return view('pages/admin/biodata/index', $data);
            break;

            case 'User':
            $biodata = $this->biodataModel->where('user_id', $user_id)->first();

            $pendidikanID = $biodata['pendidikan_id'] ?? null;
            $pelatihanID = $biodata['pelatihan_id'] ?? null;
            $pekerjaanID = $biodata['pekerjaan_id'] ?? null;

            $pendidikanModel = new PendidikanModel();
            $pendidikanData = $pendidikanModel->find($pendidikanID);

            $pelatihanModel = new PelatihanModel();
            $pelatihanData = $pelatihanModel->find($pelatihanID);

            $pekerjaanModel = new PekerjaanModel();
            $pekerjaanData = $pekerjaanModel->find($pekerjaanID);

            $jsonPendidikan = null;
            if ($pendidikanData && array_key_exists('pendidikan', $pendidikanData)) {
                $jsonPendidikan = json_decode($pendidikanData['pendidikan'], true) ?? null;
            }

            $jsonPelatihan = null;
            if ($pelatihanData && array_key_exists('pelatihan', $pelatihanData)) {
                $jsonPelatihan = json_decode($pelatihanData['pelatihan'], true) ?? null;
            }

            $jsonPekerjaan = null;
            if ($pekerjaanData && array_key_exists('pekerjaan', $pekerjaanData)) {
                $jsonPekerjaan = json_decode($pekerjaanData['pekerjaan'], true) ?? null;
            }


            return view('pages/user/biodata', [
                'biodata' => $biodata,
                'pendidikan' => $pendidikanData,
                'jsonPendidikan' => $jsonPendidikan,
                'jsonPelatihan' => $jsonPelatihan,
                'jsonPekerjaan' => $jsonPekerjaan,
                'title' => 'Biodata',
                'active' => 'biodata',
            ]);
            break;
        }
    }

    public function isiFormulir()
    {
        $session = session();

        $biodataModel = new BiodataModel();
        $userData = $biodataModel->where('user_id', $session->get('id_user'))->first();

        if ($userData) {
            return redirect()->back()->with('error', 'Akses ditolak! Anda sudah mengisi formulir sebelumnya.');
        } else {
            return $this->new();
        }
    }


    public function new(): string
    {
        $user = $this->userModel->findAll();
        $data = [
            'title' => 'Form Biodata Pelamar',
            'active' => 'biodata',
            'user' => $user
        ];

        $session = \Config\Services::session();
        if ($session->get('role') == 'Admin') {
            return view('pages/admin/biodata/add', $data);
        } elseif ($session->get('role') == 'User') {
            return view('pages/user/add', $data);
        }
    }

    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            $pendidikanModel = new PendidikanModel();
            $pendidikanData = [
                'pendidikan' => json_encode([
                    'pendidikan' => $this->request->getPost('pendidikan'),
                    'institusi' => $this->request->getPost('institusi'),
                    'jurusan' => $this->request->getPost('jurusan'),
                    'tahun' => $this->request->getPost('tahun_pendidikan'),
                    'ipk' => $this->request->getPost('ipk'),
                ]),
            ];

            $pendidikanModel->insert($pendidikanData);
            $pendidikanID = $pendidikanModel->insertID();


            // PELATIHAN AREA
            $pelatihanModel = new PelatihanModel();
            $pelatihanData = [
                'pelatihan' => json_encode([
                    'pelatihan' => $this->request->getPost('pelatihan'),
                    'sertifikat' => $this->request->getPost('sertifikat'),
                    'tahun' => $this->request->getPost('tahun_pelatihan'),
                ]),
            ];

            $pelatihanModel->insert($pelatihanData);
            $pelatihanID = $pelatihanModel->insertID();


            // PEKERJAA AREA
            $pekerjaanModel = new PekerjaanModel();
            $pekerjaanData = [
                'pekerjaan' => json_encode([
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'posisi' => $this->request->getPost('posisi'),
                    'pendapatan' => $this->request->getPost('pendapatan'),
                    'tahun' => $this->request->getPost('tahun_pekerjaan'),
                ]),
            ];

            $pekerjaanModel->insert($pekerjaanData);
            $pekerjaanID = $pekerjaanModel->insertID();


            // BIODATA AREA
            $tempatLahir = $this->request->getPost('tempat_lahir');
            $tglLahir = $this->request->getPost('tgl_lahir');
            $tanggalFormat = date('d F Y', strtotime($tglLahir));
            $ttl = $tempatLahir . ', ' . $tanggalFormat;

            $biodataModel = new BiodataModel();
            $biodataData = [
                'pendidikan_id' => $pendidikanID,
                'pelatihan_id' => $pelatihanID,
                'pekerjaan_id' => $pekerjaanID,
                'user_id' => $this->request->getPost('user_id'),
                'posisi_lamar' => $this->request->getPost('posisi_lamar'),
                'nama' => $this->request->getPost('nama'),
                'ktp' => $this->request->getPost('ktp'),
                'ttl' => $ttl,
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'gol_darah' => $this->request->getPost('gol_darah'),
                'status' => $this->request->getPost('status'),
                'alamat_ktp' => $this->request->getPost('alamat_ktp'),
                'alamat_tinggal' => $this->request->getPost('alamat_tinggal'),
                'email' => $this->request->getPost('email'),
                'telepon' => $this->request->getPost('telepon'),
                'telepon_two' => $this->request->getPost('telepon_two'),
                'skill' => $this->request->getPost('skill'),
                'question' => $this->request->getPost('question'),
                'salary' => $this->request->getPost('salary'),
            ];

            $biodataModel->insert($biodataData);

            $session = \Config\Services::session();
            if ($session->get('role') == 'Admin') {
                return redirect()->to('admin/biodata-pelamar')->with('success', 'Data berhasil ditambahkan');
            } elseif ($session->get('role') == 'User') {
                return redirect()->to('user/biodata-pelamar')->with('success', 'Formulir berhasil diisi');
            }
        }
    }

    public function edit($id, $nama, $posisi): string
    {
        $userRole = session()->get('role');
        $user_id = session()->get('user_id');

        switch ($userRole) {
            case 'Admin':

            $biodataModel = new BiodataModel();
            $biodata = $biodataModel->find($id);

            $pendidikanID = $biodata['pendidikan_id'];
            $pelatihanID = $biodata['pelatihan_id'];
            $pekerjaanID = $biodata['pekerjaan_id'];

            $pendidikanModel = new PendidikanModel();
            $pendidikanData = $pendidikanModel->find($pendidikanID);

            $pelatihanModel = new PelatihanModel();
            $pelatihanData = $pelatihanModel->find($pelatihanID);

            $pekerjaanModel = new PekerjaanModel();
            $pekerjaanData = $pekerjaanModel->find($pekerjaanID);


            $jsonPendidikan = json_decode($pendidikanData['pendidikan'], true);
            $jsonPelatihan = json_decode($pelatihanData['pelatihan'], true);
            $jsonPekerjaan = json_decode($pekerjaanData['pekerjaan'], true);

            return view('pages/admin/biodata/edit', [
                'biodata' => $biodata,
                'pendidikan' => $pendidikanData,
                'jsonPendidikan' => $jsonPendidikan,
                'jsonPelatihan' => $jsonPelatihan,
                'jsonPekerjaan' => $jsonPekerjaan,
                'title' => 'Biodata',
                'active' => 'biodata',
            ]);
            break;

            case 'User':
            $biodata = $this->biodataModel->where('user_id', $user_id)->first();

            $pendidikanID = $biodata['pendidikan_id'] ?? null;
            $pelatihanID = $biodata['pelatihan_id'] ?? null;
            $pekerjaanID = $biodata['pekerjaan_id'] ?? null;

            $pendidikanData = null;
            $pelatihanData = null;
            $pekerjaanData = null;

            if ($pendidikanID !== null) {
                $pendidikanModel = new PendidikanModel();
                $pendidikanData = $pendidikanModel->find($pendidikanID);
            }

            if ($pelatihanID !== null) {
                $pelatihanModel = new PelatihanModel();
                $pelatihanData = $pelatihanModel->find($pelatihanID);
            }

            if ($pekerjaanID !== null) {
                $pekerjaanModel = new PekerjaanModel();
                $pekerjaanData = $pekerjaanModel->find($pekerjaanID);
            }

            $jsonPendidikan = $pendidikanData ? json_decode($pendidikanData['pendidikan'], true) : null;
            $jsonPelatihan = $pelatihanData ? json_decode($pelatihanData['pelatihan'], true) : null;
            $jsonPekerjaan = $pekerjaanData ? json_decode($pekerjaanData['pekerjaan'], true) : null;

            $data = [
                'biodata' => $biodata,
                'pendidikan' => $pendidikanData,
                'jsonPendidikan' => $jsonPendidikan,
                'jsonPelatihan' => $jsonPelatihan,
                'jsonPekerjaan' => $jsonPekerjaan,
                'title' => 'Biodata',
                'active' => 'biodata',
            ];

            return view('pages/user/edit-biodata', $data);
            break;
        }
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'post') {
            $pendidikanModel = new PendidikanModel();
            $pelatihanModel = new PelatihanModel();
            $pekerjaanModel = new PekerjaanModel();
            $biodataModel = new BiodataModel();
            $biodata = $biodataModel->find($id);

            $pendidikanData = [
                'pendidikan' => json_encode([
                    'pendidikan' => $this->request->getPost('pendidikan'),
                    'institusi' => $this->request->getPost('institusi'),
                    'jurusan' => $this->request->getPost('jurusan'),
                    'tahun' => $this->request->getPost('tahun_pendidikan'),
                    'ipk' => $this->request->getPost('ipk'),
                ]),
            ];

            $pelatihanData = [
                'pelatihan' => json_encode([
                    'pelatihan' => $this->request->getPost('pelatihan'),
                    'sertifikat' => $this->request->getPost('sertifikat'),
                    'tahun' => $this->request->getPost('tahun_pelatihan'),
                ]),
            ];

            $pekerjaanData = [
                'pekerjaan' => json_encode([
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'posisi' => $this->request->getPost('posisi'),
                    'pendapatan' => $this->request->getPost('pendapatan'),
                    'tahun' => $this->request->getPost('tahun_pekerjaan'),
                ]),
            ];

            $pendidikanModel->update($biodata['pendidikan_id'], $pendidikanData);
            $pelatihanModel->update($biodata['pelatihan_id'], $pelatihanData);
            $pekerjaanModel->update($biodata['pekerjaan_id'], $pekerjaanData);

            $updatedBiodataData = [
                'user_id' => $biodata['user_id'],
                'posisi_lamar' => $this->request->getPost('posisi_lamar'),
                'nama' => $this->request->getPost('nama'),
                'ktp' => $this->request->getPost('ktp'),
                'ttl' => $this->request->getPost('ttl'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'gol_darah' => $this->request->getPost('gol_darah'),
                'status' => $this->request->getPost('status'),
                'alamat_ktp' => $this->request->getPost('alamat_ktp'),
                'alamat_tinggal' => $this->request->getPost('alamat_tinggal'),
                'email' => $this->request->getPost('email'),
                'telepon' => $this->request->getPost('telepon'),
                'telepon_two' => $this->request->getPost('telepon_two'),
                'skill' => $this->request->getPost('skill'),
                'question' => $this->request->getPost('question'),
                'salary' => $this->request->getPost('salary'),
            ];

            $biodataModel->update($id, $updatedBiodataData);

            return redirect()->to('admin/biodata-pelamar')->with('success', 'Data berhasil diperbarui');
        }
    }


    public function delete($id)
    {
        $biodata = $this->biodataModel->find($id);

        if ($biodata) {
            $pendidikanID = $biodata['pendidikan_id'];
            $pelatihanID = $biodata['pelatihan_id'];
            $pekerjaanID = $biodata['pekerjaan_id'];

            $this->pendidikanModel->delete($pendidikanID);
            $this->pelatihanModel->delete($pelatihanID);
            $this->pekerjaanModel->delete($pekerjaanID);

            $this->biodataModel->delete($id);

            return redirect()->to('admin/biodata-pelamar')->with('success', 'Data berhasil dihapus');
        } 
    }


    public function view($id, $nama, $posisi)
    {
        $biodataModel = new BiodataModel();
        $biodata = $biodataModel->find($id);

        $pendidikanID = $biodata['pendidikan_id'];
        $pelatihanID = $biodata['pelatihan_id'];
        $pekerjaanID = $biodata['pekerjaan_id'];

        $pendidikanModel = new PendidikanModel();
        $pendidikanData = $pendidikanModel->find($pendidikanID);

        $pelatihanModel = new PelatihanModel();
        $pelatihanData = $pelatihanModel->find($pelatihanID);

        $pekerjaanModel = new PekerjaanModel();
        $pekerjaanData = $pekerjaanModel->find($pekerjaanID);


        $jsonPendidikan = json_decode($pendidikanData['pendidikan'], true);
        $jsonPelatihan = json_decode($pelatihanData['pelatihan'], true);
        $jsonPekerjaan = json_decode($pekerjaanData['pekerjaan'], true);

        return view('pages/admin/biodata/view', [
            'biodata' => $biodata,
            'pendidikan' => $pendidikanData,
            'jsonPendidikan' => $jsonPendidikan,
            'jsonPelatihan' => $jsonPelatihan,
            'jsonPekerjaan' => $jsonPekerjaan,
            'title' => 'Biodata',
            'active' => 'biodata',
        ]);
    }

}

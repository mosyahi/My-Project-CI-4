<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function index(): string
    {
        return view('auth/login', ['title' => 'Sign In']);
    }

    public function register(): string
    {
        return view('auth/register', ['title' => 'Sign Up']);
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $authModel = new AuthModel();
        $user = $authModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            if ($user['status'] == 'Active') {
                $session = \Config\Services::session();
                $session->set('auth', true);
                $session->set('nama', $user['nama']);
                $session->set('email', $user['email']);
                $session->set('role', $user['role']);
                $session->set('status', $user['status']);
                $session->set('id_user', $user['id_user']);

                // if ($user['role'] == 'Siswa') {
                //     $siswaModel = new SiswaModel();
                //     $siswaData = $siswaModel->getSiswaByUserId($user['id_user']);
                //     if ($siswaData) {
                //         $session->set('foto_url', base_url('uploads/siswa/' . $siswaData['foto']));
                //         $session->set('siswa_id', $siswaData['id_siswa']);
                //     }
                //     return redirect()->to('siswa/dashboard')->with('success', 'Login Berhasil.');
                // }

                return redirect()->to('admin/dashboard')->with('success', 'Login Berhasil.');
            } else {
                $session = \Config\Services::session();
                $session->setFlashdata('error', 'Akun Anda tidak aktif. Silahkan hubungi <a href="https://wa.me/628988658838" target="blank" class="text-primary">&nbsp;Admin</a>');
                return redirect()->back();
            }
        }

        $session = \Config\Services::session();
        $session->setFlashdata('error', 'Email atau Password Anda Salah');
        return redirect()->back();
    }

    public function signup()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $validationRules = [
            'password' => 'required|min_length[8]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $auth = new AuthModel();

        $userData = [
            'nama' => null,
            'email' => $email,
            'password' => $hashedPassword,
            'role' => 'User',
            'status' => 'Active',
        ];

        $valid = $auth->where('email', $userData['email'])->first();
        if ($valid) {
            return redirect()->back()->with('error', 'Email sudah ada dalam database.');
        }

        $auth->insert($userData);
        session()->setFlashdata('success', 'Pendaftaran berhasil.');
        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
<?php

namespace App\Controllers;

class Auth extends BaseController
{
  public function __construct()
  {
    helper(['form']);
    $this->validation = \Config\Services::validation();
    $this->session = session();
  }

  public function login()
  {
    if ($this->request->getPost()) {
      $data = $this->request->getPost();
      $validate = $this->validation->run($data, 'login');
      $errors = $this->validation->getErrors();

      if (!$errors) {
        $userModel = new \App\Models\UsersModel();
        $username = $this->request->getPost('user-username');
        $password = $this->request->getPost('user-password');

        $user = $userModel->where('username', $username)->first();

        if ($user) {
          $salt = $user->salt;
          if ($user->password === md5($salt . $password)) {
            $sessData = [
              'username' => $user->username,
              'id' => $user->id,
              'role' => $user->role,
              'isLoggedIn' => true
            ];
            $this->session->set($sessData);
            $this->session->setFlashData('success', 'Selamat datang, ' . $username);

            return redirect()->to(base_url('home/index'));
          } else {
            $this->session->setFlashdata('errors', ['Password salah!']);
          }
        } else {
          $this->session->setFlashdata('errors', ['Username tidak ditemukan!']);
        }
      } else {
        $this->session->setFlashdata('errors', $errors);
      }
    }

    $datas = [
      'title' => 'Halaman Log In | '
    ];

    return view('user/login', $datas);
  }

  public function logout()
  {
    $this->session->destroy();
    return redirect()->to(base_url('auth/login'));
  }
}

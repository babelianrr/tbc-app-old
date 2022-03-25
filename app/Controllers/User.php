<?php

namespace App\Controllers;

class User extends BaseController
{
  public function __construct()
  {
    helper(['form']);
    $this->validation = \Config\Services::validation();
    $this->session = session();
  }

  public function index()
  {
    $userModel = new \App\Models\UsersModel();
    $users = $userModel->findAll();
    $data = [
      'title' => 'Halaman Pengguna | ',
      'users' => $users
    ];

    return view('user/index', $data);
  }

  public function create()
  {
    if ($this->request->getPost()) {
      $data = $this->request->getPost();
      $validate = $this->validation->run($data, 'user');
      $errors = $this->validation->getErrors();

      if (!$errors) {
        $userModel = new \App\Models\UsersModel();
        $user = new \App\Entities\Users();
        $user->fill($data);
        $user->role = 1;
        $user->avatar = $this->request->getFile('avatar');
        $user->created_by = 0;
        $user->created_at = date("Y-m-d H:i:s");

        $userModel->save($user);

        $id = $userModel->insertID();

        $segment = ['auth', 'login'];

        $this->session->setFlashdata('success', 'Berhasil mendaftar! Silakan log in!');

        return redirect()->to(base_url($segment));
      }

      $this->session->setFlashdata('errors', $errors);
    }
    if ($this->session->role === 0) {
      return view('user/register');
    } else {
      return redirect()->to(base_url('user/create'));
    }

    $datas = [
      'title' => 'Halaman Pendaftaran | '
    ];
    return view('user/register', $datas);
  }

  public function view()
  {
    $id = $this->request->uri->getSegment(3);
    $userModel = new \App\Models\UsersModel();
    $data = [
      'title' => 'Detail Pengguna | ',
      'users' => $userModel->find($id)
    ];

    return view('user/view', $data);
  }

  public function update()
  {
    $id = $this->request->uri->getSegment(3);
    $userModel = new \App\Models\UsersModel();

    if ($this->request->getPost()) {
      $data = $this->request->getPost();
      $this->validation->run($data, 'userUpdate');
      $errors = $this->validation->getErrors();

      if (!$errors) {
        $userEntity = new \App\Entities\Users();
        $userEntity->fill($data);
        if ($this->request->getFile('avatar')->isValid()) {
          $userEntity->avatar = $this->request->getFile('avatar');
        }
        $userEntity->updated_by = 0;
        $userEntity->updated_at = date("Y-m-d H:i:s");
        $userModel->save($userEntity);

        $segments = ['user', 'view', $id];

        $this->session->setFlashdata('success', 'Successfully updated data!');

        return redirect()->to(base_url($segments));
      }
    }

    $datas = [
      'title' => 'Perbaharui Data Pengguna | ',
      'users' => $userModel->find($id)
    ];

    return view('user/update', $datas);
  }

  public function delete()
  {
    $id = $this->request->uri->getSegment(3);
    $userModel = new \App\Models\UsersModel();

    $userModel->delete($id);
    $this->session->setFlashdata('success', 'Berhasil menghapus akun.');

    return redirect()->to(base_url('user'));
  }

  public function register()
  {
    $datas = [
      'title' => 'Halaman Pendaftaran | '
    ];
    return view('user/register', $datas);
  }
}

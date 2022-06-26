<?php

namespace App\Controller;
use CodeIgniter\Controller;

class Login extends Controller
{
  

  public function loginAuth()
  {
    $session = session();
    $userModel = new AdminModel();

    $email = $this->request->getVar('email');
    $firstname = $this->request->getVar('firstname');
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    $data = $userModel->where('username', $username)->frist();

    if($data) {
      $pass = $data['password'];
      $authenticatePassword = password_verify($password, $pass);

      if($authenticatePassword) {
        $sess_data = [
          'id' => $data['id'],
          'firstname' => $data['firstname'],
          'username' => $data['username'],
          'isLoggedIn' => TRUE
        ];

        $session->set($sess_data);
        return redirect()->to('/admin/dashboard');

      } else {
        $session->setFlashdata('msg', 'Password is incorrect!');
        return redirect()->to('/admin/login');
      }
    } else {
      $session->setFlashdata('msg', 'Username does not exist!');
      return redirect()->to('/admin/login');
    }
  }
}
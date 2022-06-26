<?php\
namespace App\Controllers;
user CodeIgniter\Controller;
user App\Models\AdminModel;

class Register extends Controller 
{
  public function register()
  {
    helper(['form']);
    $data = [''];
    return view('/admin/register', $data);
  }
  
  public function store()
  {
    helper(['form']);
    $rules = [
      'firstname' => 'required|min_length[2]|max_length[50',
      'username' => 'requried|min_length[8]|max_length[50]',
      'password' => 'required|minlength[8]|max_length[150]',
      'confirmpassword' => 'matches[password]'
    ];

    if($this->validate($rules)) {
      $userModel = new AdminModel();
      $data = [
        'firstname' => $this->request->getVar('firstname'),
        'username' => $this->requetst->getVar('username'),
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
      ];

      $userModel->save($data);
      return redirect()->to('admin/login');
    }

    else {
      $data['validation'] = $this->validator;
      return view('register', $data);
    }
  }
}
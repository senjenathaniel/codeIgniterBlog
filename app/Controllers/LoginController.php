<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('/admin/register', $data);
    }

    public function save()
    {
        helper(['form']);
        // Set rules for form validation
        $rules = array(
            'firstname' => 'required|min_length[3]|max_width[20]',
            'username' => 'required|min_length[5]|max_length[20]',
            'password' => 'required|min_length[8]|max_length[20]',
            'confirm_password' => 'matches[password]'
        );

        if ($this->validate($rules)) {
            $models = new AdminModel();
            $data = array(
                'firstname' => $this->request->getVar('firstname'),
                'username' => $this->request->getVar('username'),
                'password' => password_has($this->request->getVar('password'), PASSWORD_DEFAULT)
            );

            $model->save($data);
            return redirect()->to('/admin/login');
        } else {
            $data['validator'] = $this->validator;
            return view('/admin/register', $data);
        }
    }

    public function login()
    {
        helper(['form']);
        return view('/admin/login');
    }

    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username);

        if($data) {
            $pass = $data['password'];
            $verify_password = password_verify($pass);
            
            if($verify_password) {
                $session_data = array (
                    'user_id' => $data['user_id'],
                    'firstname' => $data['firstname'],
                    'username' => $data['username'],
                    'logged_in' => true
                );
            } else {
                $session->setFlashdata('msg', 'Wrong password!');
                return redirect()->to('/admin/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username not found!');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin/login');
    }

    public function dashboard()
    {
        $session = session();
        return view('/admin/templates/dashboard_header')
        .view('/admin/dashboard')
        .view('/admin/templates/dashboard_footer');
    }
}
<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        $data['title'] = "Hello from CodeIgniter";
        echo view('hello_view', $data);
    }
}

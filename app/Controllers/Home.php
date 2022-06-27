<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Hello from CodeIgniter";
        echo view('/blog/blog_home', $data);
    }
}

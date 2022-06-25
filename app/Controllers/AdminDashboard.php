<?php

namespace App\Controllers;

class AdminDashboard extends BaseController
{
    public function index()
    {
        $model = new AdminDashboard();
        $data = ['title' => "Admin Dashboard", 'heading' => 'Welcome to the Admin Dashboard'];

        return view('admin/templates/dashboard_header', $data)
        . view('admin/dashboard', $data)
        . view('admin/templates/dashboard_footer');
    }

}

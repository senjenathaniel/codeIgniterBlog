<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blog'] = $model->get_blog();

        return view('templates/header')
        . view('/blog/blog_view', $data)
        . view('templates/footer');
    }
}

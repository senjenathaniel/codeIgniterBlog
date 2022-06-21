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
        . view('/blog/blog_index', $data)
        . view('templates/footer');
    }

    public function single($id)
    {
        $model = new BlogModel();
        $id = $this->request->getPost('blog_id');
        $data = array(
            'blog_title' => $this->request->getPost('blog_title'),
            'blog_body' => $this->request->getPost('blog_body'),
            'blog_author' => $this->request->getPost('blog_author'),
            'blog_image_url' => $this->request->getPost('blog_image_url'),
            'blog_posting_time' => $this->request->getPost('blogposting_time'),
        );

        return view('templates/header')
        . view('/blog/single_blog', $data)
        . view('templates/footer');
    }
}

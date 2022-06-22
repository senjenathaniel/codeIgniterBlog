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
        . view('/templates/navbar')
        . view('/blog/blog_index', $data)
        . view('templates/footer');
    }

    public function single($id = false)
    {
        $model = new BlogModel();
        $id = $this->request->getPost('id');
        if (!empty($id)) {
            if ($data['post'] = $model->get_blog($id)->getRow() === true) {
                // echo "this works";
                echo $id;
            } else {
                echo "This works not";
                // echo $id;
            }

            $data = array(
                'blog_title' => $this->request->getPost('blog_title'),
                'blog_body' => $this->request->getPost('blog_body'),
                'blog_author' => $this->request->getPost('blog_author'),
                'blog_image_url' => $this->request->getPost('blog_image_url'),
                'blog_posting_time' => $this->request->getPost('blog_posting_time'),
            );

            return view('templates/header')
            . view('/templates/navbar')
            . view('/blog/single_blog', $data)
            . view('templates/footer');

        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Could not locate post ' . $id);
        }

    }
}

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

    public function single($id)
    {
        $id = 1;
        $model = new BlogModel();
        $post = $model->find($id);
        if ($post) {
            $data = array(
                'blog_title' => $post['blog_title'],
                'blog_body' => $post['blog_body'],
                'blo'

            );

            return view('templates/header')
            . view('/templates/navbar')
            . view('/blog/single_blog', $data)
            . view('templates/footer');

        } else {
            echo "Page no found";
        }

    }
}

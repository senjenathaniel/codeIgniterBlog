<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        // $data['blog'] = $model->get_blog();

        $data = [
            'blogs' => $model->get_blog(),
            'title' => 'Latest blogs',
        ];

        return view('templates/header')
        . view('/templates/navbar')
        . view('/blog/blog_index', $data)
        . view('templates/footer');
    }

    public function view($id = false)
    {
        $model = model(BlogModel::class);

        $data['blogs'] = $model->get_blog($id);

        if (empty($data['blogs'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the blogs item' . $id);
        } else {
            $data['title'] = $data['blogs']['blog_title'];

        }
        return view('templates/header')
        . view('/templates/navbar')
        . view('/blog/blog_view', $data)
        . view('templates/footer');

    }
}

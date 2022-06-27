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
            'blogs' => $model->paginate(8),
            'title' => 'Latest blogs',
            'pager' => $model->pager,
        ];

        return view('templates/header', $data)
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
        return view('templates/header', $data)
        . view('/templates/navbar')
        . view('/blog/blog_view', $data)
        . view('templates/footer');

    }

    public function create()
    {
        $model = model(BlogModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_len[255]',
            'body' => 'required',
        ])) {
            $model->save([
                'title' => $this->request->getPost('blog_title'),
                'body' => $this->request->getPost('blog_body'),
                'blog_id' => url_title($this->request->getPost('title'), '-', true),
            ]);
            return view('/admin/dashboard');
        }

        return view('admin/templates/dashboard_header')
        . view('admin/dashboard')
        . view('admin/templates/dashboard_footer');
    }
}

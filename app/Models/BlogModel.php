<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{

    protected $table = 'blogs';
    public function get_blog($id = false)
    {
        $db = \Config\Database::connect();

        if ($id === false) {
            return $this->findAll();
        } else {
            $query = $db->query('SELECT * FROM blogs WHERE id = ' . $id);
            $row = $query->getRowArray();
            $data['blog'] = array(
                'blog_title' => $row['blog_title'],
                'blog_author' => $row['blog_author'],
                'blog_body' => $row['blog_body'],
                'blog_posting_time' => $row['blog_posting_time'],
                'blog_img_url' => $row['blog_image_url'],
            );

            return $data;

        }
    }
}

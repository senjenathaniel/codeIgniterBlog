<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{

    protected $table = 'blogs';
    public function get_blog($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}

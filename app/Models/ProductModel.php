<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['product_id' => $id]);
        }
    }

    public function saveProduct($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function edit($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('product_id' => $id));

        return $query;
    }
}

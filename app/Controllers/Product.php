<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['product'] = $model->getProduct();
        echo view('product_view', $data);
    }

    public function add_new()
    {
        echo view("add_product_view");
    }

    public function save()
    {
        $model = new ProductModel();
        $data = array(
            'product_name' => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
        );

        $model->saveProduct($data);

        return redirect()->to('product');

    }
}

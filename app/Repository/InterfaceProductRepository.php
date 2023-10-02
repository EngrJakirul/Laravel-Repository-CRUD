<?php

namespace App\Repository;
interface InterfaceProductRepository
{
    public function createProduct($request);
    public function getAllProducts();
    public function editProduct($id);
    public function updateProduct($id, $data);
    public function deleteProduct($id);
}


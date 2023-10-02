<?php

namespace App\Repository\Category;
interface InterfaceCategoryRepository{
    public function createCategory($request);
    public function getAllCategory();
    public function editCategory($id);
    public function updateCategory($id, $data);
    public function deleteCategory($id);
    public function categoryAllData();
}

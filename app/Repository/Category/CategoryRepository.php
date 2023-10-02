<?php

namespace App\Repository\Category;

use App\Models\Category;
use App\Models\Product;

class CategoryRepository implements InterfaceCategoryRepository{

    public function createCategory($request)
    {
        Try{
            Category::insert([
                'name'          => $request->name,
                'description'   => $request->description,
                'status'        => $request->status,
            ]);
            return true;
        }
        Catch(\Exception $th){

            return false;
        }

    }

    public function getAllCategory()
    {
        return Category::all();
    }

    public function editCategory($id)
    {
        return Category::find($id);
    }

    public function updateCategory($id, $request)
    {
        $category                 = Category::find($id);
        $category->name           = $request->name;
        $category->description    = $request->description;
        $category->status         = $request->status;
        $category->save();
        return true;
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return true;
    }

    public function categoryAllData()
    {
        return Category::all();
    }
}

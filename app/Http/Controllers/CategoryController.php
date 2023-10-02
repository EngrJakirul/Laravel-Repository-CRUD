<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Repository\Category\InterfaceCategoryRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category, $categories, $name;

    public function __construct(InterfaceCategoryRepository $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return view('web.category.create');
    }

    public function createCategory(StoreRequest $request)
    {
        if ($this->category->createCategory($request)){
            Toastr::success('Category added successfully', 'Success');
            return redirect()->route('category.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();

        }

    }

    public function manageCategory()
    {
        $categories = $this->category->getAllCategory();
        return view('web.category.manage')->with('categories', $categories);
    }
    public function editCategory($id)
    {
        $category = $this->category->editCategory($id);
        return view('web.category.edit', compact('category'));
    }

    public function updateCategory(UpdateRequest $request, $id)
    {
        if ($this->category->updateCategory($id, $request)){
            Toastr::success('Category Updated Successfully');
            return redirect()->route('category.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }

    public function deleteCategory($id)
    {
        if ($this->category->deleteCategory($id))
        {
            Toastr::success('Category Delete Successfully', 'Success');
            return redirect()->route('category.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }
}


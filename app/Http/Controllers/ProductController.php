<?php

namespace App\Http\Controllers;

use App\Http\Requests\Prouddct\StoreRequest;
use App\Http\Requests\Prouddct\UpdateRequest;
use App\Models\Category;
use App\Models\FrontUser;
use App\Models\Product;
use App\Repository\InterfaceProductRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Session;



class ProductController extends Controller
{
    public $product, $products, $image, $name;
    public $categories;
    public $users;

    public function __construct(InterfaceProductRepository $product)
    {
        $this->product = $product;

    }
    public function index()
    {
        return view('web.product.index');
    }
    public function addProduct()
    {
        $this->users = FrontUser::all();
        $this->categories = Category::all();
        return view('web.product.create', [
            'categories' => $this->categories,
            'users' => $this->users,

        ]);
    }
    public function createProduct(StoreRequest $request)
    {
        if ($this->product->createProduct($request)){
            Toastr::success('Product added successfully', 'Success');
            return redirect()->route('product.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }

    public function manageProduct(){
        $products = $this->product->getAllProducts();
        return view('web.product.manage')->with('products', $products);
    }

    public function editProduct($id)
    {
        $users = $this->users = FrontUser::all();
        $categories = $this->categories = Category::all();
        $product = $this->product->editProduct($id);
        return view('web.product.edit', compact('product','categories', 'users'));
    }

    public function updateProduct(UpdateRequest $request, $id)
    {

        if ($this->product->updateProduct($id, $request)){
            Toastr::success('Product Updated Successfully', 'Success');
            return redirect()->route('product.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }

    public function deleteProduct($id)
    {
        if ($this->product->deleteProduct($id)){
            Toastr::success('Delete successfully', 'Success');
            return redirect()->route('product.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }


}

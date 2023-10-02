<?php
namespace App\Repository;

use App\Http\Requests\Prouddct\StoreRequest;
use App\Models\Product;

class ProductRepository implements InterfaceProductRepository
{
    public function createProduct($request)
    {
        Try{
            if ($image = $request->file('image'))
            {
                $name = time().rand(1, 1000000000).'.'.$image->getClientOriginalName();
                $image->move(public_path('/images/'),$name);
            }
            Product::insert([
                'user_id'               => $request->user_id,
                'category_id'           => $request->category_id,
                'name'                  => $request->name,
                'price'                 => $request->price,
                'description'           => $request->description,
                'image'                 => $name,
            ]);
            return true;
        }
        Catch(\Exception $th){
            return false;
        }
    }
    public function getAllProducts()
    {
        return Product::with('FrontUser')->get();
    }
    public function editProduct($id)
    {
        return Product::find($id);
    }
    public function updateProduct($id, $request)
    {
        $product = Product::find($id);
        if($request->file('image'))
        {
            if (file_exists($product->image))
            {
                unlink($product->image);
            }
            $name = time().rand(1, 1000000000).'.'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/'),$name);
        }
        $product->name           = $request->name;
        $product->price          = $request->price;
        $product->user_id        = $request->user_id;
        $product->category_id    = $request->category_id;
        $product->description    = $request->description;
        if ($request->file('image'))
        {
            $product->image = $name;
        }
        $product->save();
        return true;
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return true;
    }
}

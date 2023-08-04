<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //show----------------------
    public function allProducts()
    {
       $products = Product::all();
        return view('admin.all',compact('products'));
    }

    //search----------------------
    public function search(Request $request)
    {
        $key = $request->key;

        $products = Product::where('name','like',"%$key%")->paginate(3);
        return view('user.home',compact('products'));
    }

    //create----------------------
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        //validation
        $data = $request->validate([
            "name"=>"required|string|max:255",
            "desc"=>"required|string",
            "price"=>"required|numeric",
            "quantity"=>"required|numeric",
            "image"=>"required|image|mimes:jpg,png,jpeg"
        ]);

        //storge
        $data['image'] = Storage::putFile('products',$data['image']);

        //create
        Product::create($data);

        //redirect
        return redirect(url('create'))->with("success","data inserted successfully");

    }

    //edit----------------------
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit',compact('product'));
    }

    //update----------------------
    public function update(Request $request ,$id)
    {
        //validation
        $data = $request->validate([
            "name"=>"required|string|max:255",
            "desc"=>"required|string",
            "price"=>"required|numeric",
            "quantity"=>"required|numeric",
            "image"=>"image|mimes:jpg,png,jpeg"
        ]);

        $product = Product::findOrFail($id);

        if($request->has('image'))
        {
            Storage::delete($product->image);
            $data['image'] = Storage::putFile('products',$data['image']);
        }

        $product->update($data);

        return redirect(url('products'))->with("success","data updated successfully");


    }

    //delete----------------------
    public function delete($id)
    {
       $product = Product::findOrFail($id);

        //storege
        Storage::delete($product->image);

        //product
        $product->delete();

        //redirect
        return redirect(url('products'))->with("success","data deleted successfully");
    }
}

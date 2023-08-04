<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::user()->user_type == '1')
        {
            $orders = Order::all();
            return view('admin.home',compact('orders'));
            // return view('admin.home');
        }
        else
        {
            $products = Product::paginate(6);
            return view('user.home.home',compact('products')); 
        }

    }

    public function index()
    {
        $products = Product::paginate(6);
        return view('user.home.home',compact('products'));
    }


    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('user.show.show',compact('product'));
    }
    
}

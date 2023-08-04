<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class CartController extends Controller
{
    public function create()
    {
        $userID = Auth::id();
        $carts = Cart::where('user_id',$userID)->get();
        return view('user.cart.orders',compact('carts'));
    }


    public function addToCart(Request $request)
    {
        $proId = $request['id'];
      
        $data = $request->validate([
            "name"=>"required|string|max:255",
            "desc"=>"required|string",
            "price"=>"required|numeric",
            "quantity"=>"required|numeric|min:1",
        ]);

        $proQu = DB::table('products')->where('id', "$proId")->value('quantity');
        $proimage = DB::table('products')->where('id', "$proId")->value('image');


        if($data['quantity'] > $proQu)
        {
            return redirect(url("show/$proId"))->with("error",["out of stoke"]);
        }
        else
        {
            $newPrice = $data['price'] * $data['quantity'];
            $data['price'] = $newPrice;
            $data['image'] = $proimage;
            $data['product_id'] = $proId;
            $data['user_id'] = Auth::id();
            Cart::create($data);
    
            return redirect(url("show/$proId"))->with("success","success");
        }
    }

        //delete----------------------
        public function delete($id)
        {
           $product = Cart::findOrFail($id);
    
            //product
            $product->delete();
    
            //redirect
            return redirect(url('cart'))->with("success","success");
        }
}

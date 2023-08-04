<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    //show Orders
    public function allOrders()
    {
        $orders = Order::all();
        // return view('admin.allOrders',compact('orders'));
        return view('admin.home',compact('orders'));
    }

    //place Order
    public function insert()
    {
        $userID = Auth::id();
        $cartItems =  Cart::where('user_id',$userID)->get();
        
        $total = 0;
        foreach($cartItems as $item)
        {
            $total += $item->price;
            Order::create([
                "user_id" => $userID ,
                "product_id" => $item->product_id,
                "total" => $total,
            ]);
            
            $prod = Product::where('id', $item->product_id)->first();

            $prod->quantity = $prod->quantity - $item->quantity;
            $prod->update();
        }

        Cart::destroy($cartItems);

        return redirect(url("cart"))->with("success","order success");

    }

    //delete Order
    public function delete($id)
    {
       $order = Order::findOrFail($id);

        //delete
        $order->delete();

        //redirect
        return redirect(url('products'))->with("success","data deleted successfully");
    }

    
}

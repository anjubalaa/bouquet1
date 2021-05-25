<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use DB;

class ProductController extends Controller
{
    
    public function index()
    {
        $data =Product::all();
        return view('product',['products'=>$data]);
    }

    


    public function detail($id)
    {
        $data= Product::find($id);
        return view('detail',['products'=>$data]);
    }




    
    public function search(Request $req)
    {
        
         $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    public function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }       
    }

    static function cartItem()
    {
        $userId =Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    public function cartList()
    {
       $userId=Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        
        return view('cartlist',['products'=>$products ]);
    }




    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    
    public function orderNow()
    {
        $userId=Session::get('user')['id'];
         $total=$products= DB::table('cart')
         
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');

        return view('ordernow',['total'=>$total ]);
    
    }
    


    
    public function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart=Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="Pending";
            $order->payment_method=$req->answer;
            $order->payment_status = ($req->answer== 'Online-Payment') ? 'Paid' : 'Pending' ;
            
            $order->address=$req->address;
            $order->zip=$req->zip;
            $order->mobile=$req->mobile;
            $order->message=$req->message;
            $order->save();
            Cart::where('user_id',$userId)->delete();
         }
         $req->input();
         return redirect('/');

    }


    public function myOrder()
    {
        $userId=Session::get('user')['id'];
         $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorder',['orders'=>$orders ]);
    
    }




    public function odfjkh(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}

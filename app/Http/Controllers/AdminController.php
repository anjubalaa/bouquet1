<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use DB;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        
        $data =Product::all();
        return view('admin.viewproducts',['products'=>$data]);

        
    }

    public function product()
    {
        
        return view('admin.addproduct');
    }



    public function store(Request $request)
    {
        
        $getproname=request('name');
        $getpropri=request('price');
        $getcategory=request('category');
        $getprodes=request('description');
        $getprogal=request('gallery');
        echo $getproname;
        echo "<br>";
        echo $getpropri;
        echo "<br>";
        echo $getcategory;
        echo "<br>";
        echo $getprodes;
        echo "<br>";
        echo $getprogal;
        echo "<br>";
        $item=new product();
        $item->Name=$getproname;
        $item->Price=$getpropri;
        $item->Category=$getcategory;
        $item->Description=$getprodes;
        $item->Gallery=$getprogal;
        $item->save();
        return redirect('/viewproducts');
    }

    public function edit($id)
    {
        //
        $data=Product::find($id);
        return view('admin.editproduct',['products'=>$data]);
    }

    public function update(Request $request, $id)
    {
        //
        $item=Product::find($id);
        $getproname=request('name');
        $getpropri=request('price');
        $getcategory=request('category');
        $getprodes=request('description');
        $getprogal=request('gallery');
        
        $item->Name=$getproname;
        $item->Price=$getpropri;
        $item->Category=$getcategory;
        $item->Description=$getprodes;
        $item->Gallery=$getprogal;
        $item->save();
        return redirect('/viewproducts');
    }

    public function destroy($id)
    {
       
        Product::destroy($id);
        return redirect('/viewproducts');
    }

    public function custdetail()
    {
        $customers=User::all();
        
        return view('admin.cust',compact('customers'));
        
    }

    public function delcust($id)
    {
        $customers=User::find($id);
        $customers->delete();
        return redirect('/cust');
        
    }

    public function sea(Request $req)
    {
        
         $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('admin.sea',['products'=>$data]);
    }
   
    public function myOrder()
    {
        $userId=Session::get('user')['name'];
         $orders= DB::table('orders')
        ->join('users','orders.user_id','=','users.id')
        ->get();
        

        return view('admin.orderview',['orders'=>$orders ]);
    
    }
    public function myOrderdel()
    {
    DB::table('orders')
    ->join('users','orders.user_id','=','users.id')
          ->delete();
    }
    public function booking()
    {
        //
        $orders=DB::table('orders')
        ->join('users','orders.user_id','=','users.id')
        ->join('products','orders.product_id','=','products.id')
        
        ->get();
        return view('admin.viewbooking',compact('orders'));
    }


    public function Pay($id,$uid)
    {
        $cost=DB::table('orders')
        ->join('users','orders.user_id','=','users.id')
        
        ->where('product_id',$id)
        ->where('email',$uid)
        ->get();
        echo $cost;
        return view('admin.payment',compact('cost'));
    }
    public function paymentStatus($id,$uid)
    {
        echo $id;
        //return redirect('/viewbookings');
        DB::table('orders')
        ->join('users','orders.user_id','=','users.id')
        ->join('products','orders.product_id','=','products.id')
              ->where('product_id', $id)
              ->where('email',$uid)
              ->update(['payment_status' => 'Paid','status' => 'Delivered']);
              return redirect('admin.viewbooking');
    }
    public function deletepay($id,$uid)
    {
        echo $id;
        DB::table('orders')
        ->join('users','orders.user_id','=','users.id')
              ->where('product_id', $id)
              ->where('email',$uid)
              ->delete();
              return redirect('admin.viewbooking');
    }
}

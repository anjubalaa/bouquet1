<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
   
   
   
    public function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return back()->with( "USERNAME OR PASSWORD NOT VALID") ;
        }
        else if($req->password=='admin')
        {
            return redirect('/admin');
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    
    public function register(Request $req)
    {
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->place=$req->place;
        $user->mobile=$req->mobile;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');

        //return $req->input();
    }

    public function create()
    {
        //
    }
/*
    public function edit($id)
    {
        //
        $data=User::find($id);
        return view('change',['users'=>$data]);
    }

    public function update(Request $request, $id)
    {
        
        $item=User::find($id);
        $getpass=request('password');
        $getnpass=request('npassword');
        $getcpass=request('cpassword');
        
        
        $item->Name=$getproname;
        $item->Price=$getpropri;
        $item->Category=$getcategory;
        
        $item->save();
        return redirect('/');
    }
*/
}
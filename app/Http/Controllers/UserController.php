<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Session;

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

    

    public function chpass(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return back()->with( "USERNAME OR PASSWORD NOT VALID") ;
        }
        
        if(strcmp($req->get('password'),$req->get('npassword'))== 0)
        {
            return back()->with('Errors','Your current password cannot be same with new password');
        }
        $req->validate([
            'password'=> 'required',
            'npassword'=> 'required|string|min:6|confirmed'
        ]);
        

    }

}
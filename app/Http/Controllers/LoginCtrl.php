<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('isLogin');
    }

    public function login()
    {
        return view('member.login');
    }

    public function validateLogin(Request $req)
    {
        $login = User::where('username',$req->username)->first();
        if($login){
            if(Hash::check($req->password,$login->password))
            {
                if($login->status==0){
                    return redirect()->back()->with('inactive',true);
                }
                Session::put('isLogin',true);
                Session::put('loginData',$login);
                return redirect('/');
            }else{
                return redirect()->back()->with('incorrect',true);
            }
        }else{
            return redirect()->back()->with('incorrect',true);
        }
    }
}

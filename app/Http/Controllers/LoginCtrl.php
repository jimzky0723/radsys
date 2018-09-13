<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCtrl extends Controller
{
    public function __construct()
    {

    }

    public function login()
    {
        return view('member.login');
    }
}

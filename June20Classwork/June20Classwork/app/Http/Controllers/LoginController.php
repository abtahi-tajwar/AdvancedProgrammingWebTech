<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        // echo "From Login controller";
        return view('login.index');
    }
    function verify(Request $req){
        // dd($req);
        if($req->uname == $req->pass){
            // echo "login succed";
            return redirect('/home');
        }else{
            echo "login failed";
        }
    }
}

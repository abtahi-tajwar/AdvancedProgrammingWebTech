<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){
        //dd($req);
        
        // $req->session()->put('password', $req->password);
        // //$uname = $req->session()->get('uname');
        // $req->session()->flush();
        // $req->session()->forget('uname');
        // $uname = $req->session()->pull('uname');
        // $req->session()->has('uname');
        // $req->session()->flash('cgpa', '4');
        // $req->session()->flash('mode', 'abc');
        // $cgpa = $req->session()->get('cgpa');
        // $req->session()->keep('cgpa');
        // $req->session()->reflash();

        if($req->uname == $req->password){
            $req->session()->put('uname', $req->uname);
            //set session or cookie
            return redirect('/home');
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Validator;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(UserRequest $req){
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

        // $req->validate([
        //         'uname'=> 'required|min:5',
        //         'password'=> 'required'
        // ])->validate();

        // $this->validate($req, [
        //     'uname'=> 'required|min:5',
        //     'password'=> 'required'
        // ])->validate();

        // $validation = Validator::make($req->all(), [
        //     'uname'=> 'required|min:5',
        //     'password'=> 'required'
        // ]);

        // if($validation->fails()){
        //     //return redirect('/login')->with('errors', $validation->errors());
        //     return back()
        //             ->with('errors', $validation->errors())
        //             ->withInput();
        // }

        //$result = User::all();
        //dd($result);
        //print_r($result[0]->username);
        // $result = User::where('username', $req->uname)
        //                 ->where('password', $req->password)
        //                 ->first();

        $result = DB::table('user_table')
                        ->where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();

        if(count($result) > 0){
            $req->session()->put('uname', $req->username);
            //set session or cookie
            return redirect('/home');
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }
        
    }
}

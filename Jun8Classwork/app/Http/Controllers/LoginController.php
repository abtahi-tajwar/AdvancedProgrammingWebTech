<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){
        //dd($req);
        $users = UserController::getUserList();
        $valid = false;
        foreach($users as $user) {
            if($user['username'] === $req->uname) {
                if($user['password'] === $req->password) {
                    $valid = true;
                    break;
                }
            }
        }
        if($valid) {
            return redirect('/home');
        } else {
            echo "invalid user!";
        }
        
    }
}

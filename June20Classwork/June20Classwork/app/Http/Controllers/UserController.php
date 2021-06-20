<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    //router
    //controller
    //model
    //middleware
    //requests
    
    public function index(){
       
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $req){
        $user = new User;
        // $user->username     = $req->username; 
        // $user->name         = $req->name; 
        // $user->cgpa         = $req->cgpa; 
        // $user->password     = $req->password; 
        // $user->type         = 'admin'; 
        // $user->dept         = 'CSE'; 
        // $user->profile_img  = '';
        // $user->save();

        if($req->hasFile('image')){
            $file = $req->file('image');
            // echo "file name: ".$file->getClientOriginalName()."<br>";
            // echo "file extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "file Mime Type: ".$file->getType()."<br>";
            // echo "file Size: ".$file->getSize();

            if($file->move('upload', 'abc.'.$file->getClientOriginalExtension())){
                echo "success";
            }else{
                echo "error..";
            }

        }else{
            echo "file not found!";
        }

        //return redirect()->route('user.list');
    }

    public function details($id){
        
        // $users = $this->getUserList();
        // $user = '';

        // foreach($users as $u){
        //     if($u['id'] == $id){
        //         $user = $u;
        //         break;
        //     }
        // }
        //$user= ['id'=>1, 'name'=>'alamin', 'password'=>'123', 'email'=>'aa@aiub.edu','type'=>'user'];

        $user = User::find($id);

        return view('user.details')->with('user', $user);
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id){
        $user= User::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->cgpa = $req->cgpa;
        $user->save();

        return redirect()->route('user.list');
    }

    public function delete($id){
        echo $id;
    }

    public function destroy($id){
        echo $id;
    }

    public function list(){
        $users = User::all();
        return view('user.userlist')->with('userlist', $users);
    }

    public function getUserList(){
        return [
            ['id'=>1, 'username'=>'alamin', 'password'=>'123', 'email'=>'email@aiub.edu', 'type'=>'admin'],
            ['id'=>2, 'username'=>'xyz', 'password'=>'223', 'email'=>'xyz@aiub.edu', 'type'=>'admin'],
            ['id'=>3, 'username'=>'abc', 'password'=>'124453', 'email'=>'abc@aiub.edu', 'type'=>'admin'],
        ];
    } 
}

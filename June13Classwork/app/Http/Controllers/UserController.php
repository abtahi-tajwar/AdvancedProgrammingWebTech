<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
       
    }

    public function create(){
        return view('user.create');
    }

    public function details($id){
        
        $users = $this->getUserList();
        $user = '';

        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        //$user= ['id'=>1, 'name'=>'alamin', 'password'=>'123', 'email'=>'aa@aiub.edu','type'=>'user'];
        return view('user.details')->with('user', $user);
    }

    public function edit($id){
        echo $id;
    }
    public static function verifySubscriber($name, $password)
    {
        $matched = false;
        $users = UserController::getUserList();
        foreach($users as $user)
        {
            if($user['subscriber'] === 'subscriber') {
                if($user['name'] === $name && $user['password'] === $password) {
                    $matched = true;
                    break;
                }
            }
            
        }
        return $matched;
    }

    public function update(Request $req, $id){
        echo $id;
    }

    public function delete($id){
        echo $id;
    }

    public function destroy($id){
        echo $id;
    }

    public function list(){
        $users = $this->getUserList();
        return view('user.userlist')->with('userlist', $users);
    }

    public static function getUserList(){
        return [
            ['id'=>1, 'username'=>'alamin', 'password'=>'123', 'email'=>'email@aiub.edu', 'type'=>'admin'],
            ['id'=>2, 'username'=>'xyz', 'password'=>'223', 'email'=>'xyz@aiub.edu', 'type'=>'admin'],
            ['id'=>3, 'username'=>'ben', 'password'=>'124453', 'email'=>'ben@aiub.edu', 'type'=>'admin'],
            ['id'=>4, 'username'=>'robin', 'password'=>'124453', 'email'=>'robin@aiub.edu', 'type'=>'subscriber'],
            ['id'=>5, 'username'=>'weatherboy', 'password'=>'124453', 'email'=>'weatherboy@aiub.edu', 'type'=>'subscriber'],
            ['id'=>6, 'username'=>'fatboy', 'password'=>'124453', 'email'=>'fatboy@aiub.edu', 'type'=>'subscriber'],
            ['id'=>7, 'username'=>'brokenidiot', 'password'=>'124453', 'email'=>'brokenidiot@aiub.edu', 'type'=>'subscriber'],
        ];
    } 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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
        return view('user.details')->with('user',$user);
    }
    public function edit($id){
        echo $id;
    }
    public function update(Request $req, $id){
        echo $id;
    }
    public function delete($id){
        echo $id;
    }
    public function insert(){
        echo "Inserted";
    }
    public function list(){

        $users = $this->GetUserList();
        return view('user.list')->with('userlist',$users);
    }
    public function GetUserList()
    {
        return [
            ['id'=> 1,'name'=> 'Fahim','pass'=> '12345','email'=> 'dfkad@gmai.kol','type'=> 'admin'],
            ['id'=> 2,'name'=> 'Faisal','pass'=> '12345','email'=> 'dfkad@gmai.kol','type'=> 'user'],
            ['id'=> 3,'name'=> 'Shuvo','pass'=> '12345','email'=> 'dfkad@gmai.kol','type'=> 'admin']
        ];
    }
}

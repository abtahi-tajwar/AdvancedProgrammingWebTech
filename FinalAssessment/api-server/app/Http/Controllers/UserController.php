<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function getAllEmployee()
    {
        return User::where('type', 'employee')->get();
    }
    function createEmployee(Request $req)
    {
        // $user = new User::create();
        // $user->type = "employee";
        return $req->all();
    }
    function updateEmployee(Request $req, $id)
    {
        $user = User::find($id);
        if($user === null) {
            return response()->json('Wrong user id', 404);
        }
        //$user = update($req->all());
        return $user;
    }
}

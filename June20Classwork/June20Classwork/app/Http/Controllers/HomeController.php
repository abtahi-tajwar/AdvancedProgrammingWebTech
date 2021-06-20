<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return view('home.index')->with('id','154');
        return view('home.index',['id'=>154, 'name'=>'Fahim']);
    }

}

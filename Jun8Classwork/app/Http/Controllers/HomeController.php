<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        // check session or cookie
        //return view('home.index')->with('id', '123');
        // return view('home.index')
        //         ->withId('123')
        //         ->withName('alamin');
        //return view('home.index', ['id'=>123, 'name'=>'alamin']);

        $id = '890';
        $name = 'MD.Al-Amin';
        return view('home.index', compact('id', 'name'));
    }
}

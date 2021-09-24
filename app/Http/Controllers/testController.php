<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test (){

        return view ('test' ,  ['name' => 'haderzayed' , 'age' => "23"]);
    }
    public function show (){

        return view ('show' ,  ['name' => 'haderzayed' , 'age' => "23"]);
    }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view("test/test");
    }

    public function save(Request $request){
        $nombreCiudad = $request->get("nombreCiudad");
        return view("test/test",compact("nombreCiudad"));
    }
}

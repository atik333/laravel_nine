<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('controller');
    }
    public function country()
    {
        return view('country');
    }
    public function inputStudent(Request $request)
    {
        
        //return($request->all()['name']);
        dd($request->all());
        
    }
}

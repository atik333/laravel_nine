<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\oneController;

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
        //dd($request->all());
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phon'] = $request->phon;

        //dd($data);

        //return redirect()->route('/home');
        //return redirect()->action('App\Http\Controllers\oneController@text');
        return redirect()->back()->with('status', 'data update');
    }


    public function laravel()
    {
        return view('page.laravel',['name'=>'9']);
    }
}

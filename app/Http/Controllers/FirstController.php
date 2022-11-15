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


    public function laravel(Request $request)
    {
        //$request->session()->get('key', 'default');
        //$request->session()->all();
        //$request->session()->invalidate();
        //$request->session()->flush();
        $request->session()->put('name', 'atik');
        $request->session()->put('email', 'atik74734@gmail.com');
        $request->session()->put('phon', '01797455655');
        //$request->session()->flush('status', 'Task was successful!');
        $request->session()->now('status', 'Task was successful!');
        return view('page.laravel',['name'=>$request]);
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClassController extends Controller
{   
    //auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $class = DB::table('classes')->get();
        return view('admin.class.class',compact('class'));
    }
}

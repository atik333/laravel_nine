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

    //class data//
    public function index()
    {
        $class = DB::table('classes')->get();
        return view('admin.class.class',compact('class'));
    }
    public function addclass()
    {
        return view('admin.class.addclass');
    }
    public function classStore(Request $request)
    {
        $request->validate([
            'class_name' => 'required|unique:classes',
        ]);
        $data = array(
            'class_name' =>$request->class_name,
        );
        DB::table('classes')->insert($data);
        return redirect()->back()->with('success','successfully inserted');
    }
    public function deleteClass($id){
       
        DB::table('classes')->where('id',$id)->delete();
       
        return redirect()->back()->with('success','successfully Delete');
    }

}

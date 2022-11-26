<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$student = DB::table('students')->get();
        //join table
        //$student = DB::table('students')->join('classes','students.class_id','classes.id')->get();

        //left join table
        $student = DB::table('students')
        ->leftJoin('classes','students.class_id','classes.id')
        ->get();

        //right join table
        // $student = DB::table('students')
        // ->rightJoin('classes','students.class_id','classes.id')
        // ->get();



        //2<.. table join
        // $student = DB::table('students')
        // ->join('classes','students.class_id','classes.id')
        // ->join('new_table','classes.id','new_table.new_id')
        // ->get();



        return view('admin.student.student', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $classes = DB::table('classes')->get();
        return view('admin.student.insert',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'roll' => 'required',
            'phon' => 'required',
            'email' => 'required',
        ]);
        $data = array(
            'class_id' =>$request->class_id,
            'name' =>$request->name,
            'roll' =>$request->roll,
            'phon' =>$request->phon,
            'email' =>$request->email,
        );
        DB::table('students')->insert($data);
        return redirect()->back()->with('success','successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $show = DB::table('students')->where('id',$id)->first();
        return view('admin.student.update',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = DB::table('classes')->get();
        $student = DB::table('students')->where('id',$id)->first();
        return view('admin.student.edit',compact('classes','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'roll' => 'required',
            'phon' => 'required',
            'email' => 'required',
        ]);
        $data = array(
            'class_id' =>$request->class_id,
            'name' =>$request->name,
            'roll' =>$request->roll,
            'phon' =>$request->phon,
            'email' =>$request->email,
        );
        DB::table('students')->where('id',$id)->update($data);
        return redirect()->route('students.index')->with('success','successfully update');
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        
        return redirect()->back()->with('success','successfully Delete');

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    //__index_show_data__//
    public function index()
    {
       //__query_builder__//
       //$category = DB::table('categories')->get();

       //__eleoquent__//
       $category =Category::all();

       return view('admin.category.index',compact('category'));
    }
    public function Create()
    {
        return view('admin.category.create');
    }
    public function Store(Request $request)
    {
        
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);
        //__save__//

        $category = new Category;
        $category->category_name=$request->category_name;
        $category->category_slug=Str::of($request->category_name)->slug('-');
        $category->save();


        //__insert__//

        // Category::insert([
        //     'category_name' =>$request->category_name,
        //     'category_slug' =>Str::of($request->category_name)->slug('-'),
        // ]);


        // Category::insert([
        //     'category_name' =>$request->category_name,
        //     'category_slug' =>Str::of($request->category_name)->slug('-'),
        // ]);



        Toastr::success('data save', 'Title', ["positionClass" => "toast-top-right"]);  
        
        //$notification=array('messege' => 'category inserted', 'alert-type' => 'success');
        return redirect()->back();
    }
    public function Edit($id)
    {
        $data=Category::find($id);
        //dd($data->category_name);
        return view('admin.category.edit',compact('data'));
    }
    public function Update(Request $request,$id)
    {
        //__update_method__//

    //    $category=Category::find($id);
    //    $category->Update([
    //        'category_name' =>$request->category_name,
    //        'category_slug' =>Str::of($request->category_name)->slug('-'),
    //    ]);



       //__save_method__//

       $category=Category::find($id);
       $category->category_name = $request->category_name;
       $category->category_slug = Str::of($request->category_name)->slug('-');
       $category->save();
        
        return redirect()->route('category.index');
    }
    public function Delete($id)
    {
        //DB::table('categories')->where('id',$id)->delete();

        // $category=Category::find($id);
        // $category->delete();

        Category::destroy($id);

        return redirect()->back();
    }


}

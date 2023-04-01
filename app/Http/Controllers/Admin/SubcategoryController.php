<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subcategory;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use Brian2694\Toastr\Facades\Toastr;






class SubcategoryController extends Controller
{ 
    public function index()
    {
         //__query_builder__//
         //$subcategory = DB::table('subcategories')->leftJoin('categories','subcategories.category_id','categories.id')->select('categories.category_name','subcategories.*')->get();
         //$subcategory = DB::table('subcategories')->leftJoin('categories','subcategories.category_id','categories.id')->select('categories.category_name','subcategories.*')->get();
  
         //__eleoquent__// 
         //$category =subcategory::all();
         $subcategory = subcategory::all();
        
        
         //return response()->json($subcategory);
      
        return view('admin.subcategory.index',compact('subcategory'));
     }
     public function create()
     {
         //__query_builder__//
         //$category = DB::table('subcategories')->get();
  
         //__eleoquent__//
         //$category =subcategory::all();
         $category = category::all();
  
         return view('admin.subcategory.create',compact('category'));
      }




      public function Store(Request $request)
      {
        
        $validated = $request->validate([
            'subcategory_name' => 'required|unique:subcategories|max:255',
        ]);
        //__save__//

        $category = new subcategory;
        $category->category_id=$request->category_id;
        $category->subcategory_name=$request->subcategory_name;
        $category->subcategory_slug=Str::of($request->subcategory_name)->slug('-');
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
      public function Delete($id)
      {
        $delete = subcategory::destroy($id);
        return redirect()->back();
      }

      //edit
      public function Edit($id)
      {
        $category = Category::all();
        $edit = subcategory::find($id);

        return view('admin.subcategory.edit',compact('category','edit'));
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
  
         $subcategory=subCategory::find($id);
         $subcategory->category_id = $request->category_id;
         $subcategory->subcategory_name = $request->subcategory_name;
         $subcategory->subcategory_slug = Str::of($request->subcategory_name)->slug('-');
         $subcategory->save();
          
          return redirect()->route('subcategory.index');
      }

}

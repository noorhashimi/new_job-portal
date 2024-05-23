<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function Index(){
        $category = DB::table('categories')->orderBy('id','desc')->paginate(10);
        return view('Backend.Category.index',compact('category'));

    }
    public function AddCategory(){
        return view('Backend.category.create');
    }
    public function StoreCategory(Request $request)
    {// here i should apply validation
        
        $data = array();
        $data['category-name'] = $request->category_name ;
        $data['available_position'] = $request->available_position ;
        DB::table('categories')->insert($data);
        $notification = array(
            'message' =>'category inserted successfully',
           'alert-type' =>'success'
        );
        return Redirect()->route('categories')->with('$notification');


    }
    public function EditCategory($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('Backend.Category.edit',compact('category'));

    }
    public function UpdateCategory(Request $request,$id){
        $data = array();
        $data['category-name']=$request->category_name;
        $data['available_position']=$request->available_position;
        DB::table('categories')->where('id',$id)->update($data);
        $notification = array(
            'message' =>'category updated successfully',
           'alert-type' =>'success'
        );
        return  Redirect()->route('categories');

    }
    public function DeleteCategory($id){
        DB::table('categories')->where('id',$id)->delete();
        return  Redirect()->route('categories');
    }
}

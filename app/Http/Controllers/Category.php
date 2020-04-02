<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function  index(){
//        $single_category = \App\Model\Category::find($id);
        $all_category = \App\Model\Category::all();
       return view('admin.category',compact('all_category'));
    }

    public function add_category(Request $request){
        $this->validate($request,[
            'category_name'=>'required | unique:categories,category_name'
        ]);
        \App\Model\Category::create([
            'category_name'=>$request->category_name,
        ]);
        session()->flash('success','Category Add Sucessfully ');
        return redirect()->back();
    }

    public function deactive_category($id){
       $deactive_category = \App\Model\Category::find($id);
       $deactive_category->status = '0';
       $deactive_category->save();
       return redirect()->back();
    }

    public function active_category($id){
        $active_category = \App\Model\Category::find($id);
        $active_category->status = '1';
        $active_category->save();
        return redirect()->back();
    }

}
